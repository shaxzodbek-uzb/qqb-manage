<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FiXCredits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('credits', function (Blueprint $table) {
            $table->dropColumn('image');
        });
        Schema::table('credits', function (Blueprint $table) {
            $table->text('term')->change();
            $table->text('grace_period')->change();
            $table->text('amount')->change();
            $table->unsignedBigInteger('image')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
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
