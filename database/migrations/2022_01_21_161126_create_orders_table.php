<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('order_note')->nullable();
            $table->integer('payment_id')->unsigned();
            $table->string('first_lame', 150);
            $table->string('last_name', 150);
            $table->string('town');
            $table->string('street');
            $table->string('zip')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->default('Ukraine');
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
