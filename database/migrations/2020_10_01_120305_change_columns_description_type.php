<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsDescriptionType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('news', function (Blueprint $table) {
            $table->text('description')->change();
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->text('description')->change();
        });
        Schema::table('credits', function (Blueprint $table) {
            $table->text('description')->change();
        });
        Schema::table('tariff_attributes', function (Blueprint $table) {
            $table->text('attribute')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
