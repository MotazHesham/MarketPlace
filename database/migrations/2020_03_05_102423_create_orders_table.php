<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('customer_name');
            $table->string('customer_email');
            $table->string('customer_address');
            $table->string('customer_telephone');
            $table->string('price'); 
            $table->integer('id_seller')->unsigned();
            $table->foreign('id_seller')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('product_id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
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
