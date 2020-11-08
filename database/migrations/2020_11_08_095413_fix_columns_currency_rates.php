<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixColumnsCurrencyRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currency_rates', function (Blueprint $table) {
            $table->dropColumn('sell_rate');
            $table->dropColumn('buy_rate');
            $table->dropColumn('cb_rate');
            $table->dropColumn('currency_id');
        });
        Schema::create('currency_rate_currency', function(Blueprint $table){
            $table->double('sell_rate')->default(0);
            $table->double('buy_rate')->default(0);
            $table->double('cb_rate')->default(0);
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('currency_rate_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency_rate_currency');
        Schema::table('currency_rates', function (Blueprint $table) {
            $table->double('sell_rate')->default(0);
            $table->double('buy_rate')->default(0);
            $table->double('cb_rate')->default(0);
            $table->double('currency_id')->default(0);
        });
    }
}
