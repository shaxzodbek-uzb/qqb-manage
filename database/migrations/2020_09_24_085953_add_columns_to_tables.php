<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('bank_histories', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
       Schema::table('cards', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
       Schema::table('credits', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
       Schema::table('pages', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
       Schema::table('news', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
       Schema::table('news_category', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bank_histories', function (Blueprint $table) {
           $table->dropColumn('slug');
        });
        Schema::table('cards', function (Blueprint $table) {
           $table->dropColumn('slug');
        });
        Schema::table('credits', function (Blueprint $table) {
           $table->dropColumn('slug');
        });
        Schema::table('pages', function (Blueprint $table) {
           $table->dropColumn('slug');
        });
        Schema::table('news', function (Blueprint $table) {
           $table->dropColumn('slug');
        });
        Schema::table('news_category', function (Blueprint $table) {
           $table->dropColumn('slug');
        });
    }
}
