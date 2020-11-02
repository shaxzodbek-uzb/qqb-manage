<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_types', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('slug');
            $table->boolean('active');
            $table->timestamps();
        });
        
        Schema::table('deposits', function (Blueprint $table) {
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
        Schema::dropIfExists('deposit_types');
        Schema::table('deposits', function (Blueprint $table) {
            $table->dropColumn('type_id');
        });
    }
}
