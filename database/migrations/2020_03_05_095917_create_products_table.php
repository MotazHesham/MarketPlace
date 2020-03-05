<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_description');
            $table->string('img');
            $table->integer('approve');
            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('category_id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_seller')->unsigned();
            $table->foreign('id_seller')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
}
