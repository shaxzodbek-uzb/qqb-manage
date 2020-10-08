<?php

use Illuminate\Support\Facades\Schema;
use OptimistDigital\MenuBuilder\MenuBuilder;
use OptimistDigital\MenuBuilder\Models\Menu;
use Illuminate\Database\Migrations\Migration;
use OptimistDigital\MenuBuilder\Models\MenuItem;

class ReworkLocaleHandling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add `locale` column to menu items
        Schema::table('nova_menu_menu_items', function ($table) {
            $table->string('locale')->nullable(true);
        });

        // Add `locale` value to all menu items, move `parameters` to `data`, update `class`
        $menuItems = MenuItem::all();
        $menuItems->each(function (MenuItem $menuItem) {
            try {
                $parameters = json_decode($menuItem->parameters, true);
            } catch (Exception $e) {
                $parameters = $menuItem->parameters;
            }

            $menuItem->locale = $menuItem->menu->locale;
            $menuItem->data = $parameters;

            // Update class
            if ($menuItem->class === 'OptimistDigital\MenuBuilder\Classes\MenuItemText') {
                $menuItem->class = 'OptimistDigital\MenuBuilder\MenuItemTypes\MenuItemTextType';
            }

            if ($menuItem->class === 'OptimistDigital\MenuBuilder\Classes\MenuItemStaticURL') {
                $menuItem->class = 'OptimistDigital\MenuBuilder\MenuItemTypes\MenuItemStaticURLType';
            }

            $menuItem->save();
        });

        // Make the `locale` column non-nullable and drop parameters
        Schema::table('nova_menu_menu_items', function ($table) {
            $table->string('locale')->nullable(false)->change();
            $table->dropColumn('parameters');
        });

        // De-dupe menus
        $rootMenus = Menu::where('locale_parent_id', null)->get();
        $rootMenus->each(function (Menu $rootMenu) {
            $subMenus = Menu::where('locale_parent_id', $rootMenu->id)->get();
            $subMenus->each(function (Menu $subMenu) use ($rootMenu) {
                // Move all menu items to root menu
                MenuItem::where('menu_id', $subMenu->id)
                    ->update(['menu_id' => $rootMenu->id]);

                // Delete sub menu
                $subMenu->forceDelete();
            });
        });

        Schema::table('nova_menu_menus', function ($table) {
            // Named
            $table->dropForeign('menus_locale_parent_id_foreign');
            // $table->dropUnique('menus_locale_parent_id_foreign');

            // Legacy
            $table->dropUnique('nova_menu_menus_slug_locale_unique');
            $table->dropUnique('menus_locale_parent_id_locale_unique');
        });
        Schema::table('nova_menu_menus', function ($table) {
            // $table->dropUnique('nova_menu_menus_slug_locale_unique');
            // $table->dropUnique('menus_locale_parent_id_locale_unique');
            $table->dropColumn('locale');
            $table->dropColumn('locale_parent_id');
        });
    }

    public function down()
    {
        Schema::table('nova_menu_menus', function ($table) {
            $table->string('locale')->default('ru');
            $table->bigInteger('locale_parent_id')->nullable()->unsigned();

            $table->foreign('locale_parent_id', 'menus_locale_parent_id_foreign')->references('id')->on(MenuBuilder::getMenusTableName());
            $table->unique(['locale_parent_id', 'locale'], 'menus_locale_parent_id_locale_unique');
        });

        Schema::table('nova_menu_menu_items', function ($table) {
            $table->dropColumn('locale');
            $table->json('parameters')->nullable();
        });
    }
}
