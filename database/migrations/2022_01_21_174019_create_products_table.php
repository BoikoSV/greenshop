<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('category_id')->index()->nullable();
            $table->integer('sale_id')->index()->nullable();
            $table->string('product_name');
            $table->string('short_desc')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('count')->unsigned()->default(0);
            $table->string('sku');
            $table->string('image_url')->nullable();
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
