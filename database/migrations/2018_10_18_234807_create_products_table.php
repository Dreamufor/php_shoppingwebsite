<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->integer('category_id');
            $table->integer('supplier_id');
//            $table->foreign('category_id')->references('id')->on('categories');
//            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->decimal('price');
            $table->string('imgUrl')->default('images/products/homeandliving/coaster3.jpg');
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
