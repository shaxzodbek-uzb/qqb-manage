<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resource_details', function (Blueprint $table) {
            $table->text('text')->change();
        });
        Schema::table('bank_histories', function (Blueprint $table) {
            $table->text('description')->change();
        });
        Schema::table('council_items', function (Blueprint $table) {
            $table->text('meta')->change();
        });
        Schema::table('performance_attributes', function (Blueprint $table) {
            $table->text('text')->change();
        });
        Schema::table('vacancy_details', function (Blueprint $table) {
            $table->text('text_detail')->change();
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
