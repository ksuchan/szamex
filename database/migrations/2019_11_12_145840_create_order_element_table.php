<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderElementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
		
		Schema::create('order_elements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->foreign('order_id')->references('id')->on('orders');
            $table->bigInteger('cart_element_id')->foreign('cart_element_id')->references('id')->on('cart_elements');
            $table->bigInteger('restaurant_id')->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->bigInteger('dishes_id')->foreign('dishes_id')->references('id')->on('dishes');
            $table->float('price');
            $table->float('discount_price');
            $table->float('amount');
            $table->bigInteger('order_element_status_id')->foreign('order_element_status_id')->references('id')->on('order_elements_status');
        });
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_elements');
    }
}
