<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCalculatorInputsInCredits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('credits', function (Blueprint $table) {
            $table->bigInteger('calculator_min_amount')->default(0);
            $table->bigInteger('calculator_max_amount')->default(0);
            $table->bigInteger('calculator_period')->default(0);
            $table->bigInteger('calculator_grace_period')->default(0);
            $table->bigInteger('calculator_initial_amount')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('credits', function (Blueprint $table) {
            $table->dropColumn('calculator_min_amount');
            $table->dropColumn('calculator_max_amount');
            $table->dropColumn('calculator_period');
            $table->dropColumn('calculator_grace_period');
            $table->dropColumn('calculator_initial_amount');
        });
    }
}
