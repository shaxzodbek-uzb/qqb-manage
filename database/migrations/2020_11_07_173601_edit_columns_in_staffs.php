<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnsInStaffs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->text('fulname')->change();
            $table->dropColumn('meta');
            $table->text('position')->nullable();
            $table->text('confirmation_document')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->text('meta')->nullable();
            $table->dropColumn('position');
            $table->dropColumn('confirmation_document');
        });
    }
}
