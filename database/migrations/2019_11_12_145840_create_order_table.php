<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
		Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_code');
            $table->bigInteger('cart_id')->foreign('cart_id')->references('id')->on('carts');
            $table->bigInteger('restaurant_id')->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->bigInteger('supplier_id')->foreign('supplier_id')->references('id')->on('suppliers');
            $table->float('total_price');
            $table->float('delivery_price');
            $table->float('order_price');
            $table->float('discount_price');
            $table->datetime('delivery_time');
            $table->string('delivery_address');
            $table->string('delivery_city');
            $table->bigInteger('order_status_id')->foreign('order_status_id')->references('id')->on('order_status');
        });
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
