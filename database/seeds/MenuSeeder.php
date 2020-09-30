<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
            [
                'name' => 'Главный меню',
                'slug' => 'main-menu',
                'locale' => 'en_US'
            ],
            [
                'name' => 'Дополнительный меню',
                'slug' => 'top-menu',
                'locale' => 'en_US'
            ],
            [
                'name' => 'Нижний меню',
                'slug' => 'footer',
                'locale' => 'en_US'
            ]
        ];

        DB::table('nova_menu_menus')->insert($data);
    }
}
