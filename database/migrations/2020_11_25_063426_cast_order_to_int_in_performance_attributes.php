<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\PerformanceAttributes;

class CastOrderToIntInPerformanceAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('performance_attributes', function (Blueprint $table) {
            $table->integer('order_int')->default(0);
        });
        $all = PerformanceAttributes::all();
        foreach ($all as $item){
            $item->order_int = (int)$item->order;
            $item->update();
        }
        Schema::table('performance_attributes', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('performance_attributes', function (Blueprint $table) {
            $table->renameColumn('order_int', 'order');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('performance_attributes', function (Blueprint $table) {
            //
        });
    }
}
