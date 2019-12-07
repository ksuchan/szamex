<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartElementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
		Schema::create('cart_element', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('restaurant_id')->foreign('restaurant_id')->references('id')->on('restaurant_id');
            $table->bigInteger('cart_id')->foreign('cart_id')->references('id')->on('cart');
            $table->bigInteger('dish_id')->foreign('dish_id')->references('id')->on('dish');
            $table->bigInteger('cart_element_status_id')->foreign('cart_element_status_id')->references('id')->on('cart_element_status');
            $table->float('amount');
            $table->float('price');
        });
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_element');
    }
}
