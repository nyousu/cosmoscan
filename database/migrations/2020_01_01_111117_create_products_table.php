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
        $table->increments('id', true)->unsigned()->comment('ID');
		$table->string('product_name', 40)->comment('商品名');
        $table->string('jan', 13)->comment('JANコード');
        $table->string('buy_place');
        $table->string('effect');
        $table->string('price');
        $table->string('quantity');
        $table->string('brand');
		$table->rememberToken();
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
