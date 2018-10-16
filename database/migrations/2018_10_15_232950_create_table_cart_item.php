<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCartItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id');
            $table->integer('status') ->default(0);
            $table->string('firstName', 30);
            $table->string('lastName', 30);
            $table->string('city', 30);
            $table->string('state');
            $table->string('postalCode', 10);
            $table->string('country', 30);
            $table->string('phone', 11);
            $table->decimal('gst', 10, 2);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('grandTotal', 10, 2);
            $table->dateTime('orderDate');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
