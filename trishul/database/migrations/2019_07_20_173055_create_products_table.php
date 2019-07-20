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
            $table->increments('prod_id')->index();
            $table->mediumText('prod_name');
            $table->integer('prod_category');
            $table->mediumText('prod_desc');
            $table->integer('prod_price');
            $table->integer('prod_discount');
            $table->binary('prod_image');
            $table->integer('prod_quantity');
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
