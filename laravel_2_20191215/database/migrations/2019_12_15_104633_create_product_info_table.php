<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_image');
            $table->string('product_name');
            $table->string('product_quantity');
            $table->string('product_price');
            $table->string('product_place');
            $table->string('product_effect');
            $table->string('product_brand');
            $table->string('product_jan');
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
        Schema::dropIfExists('product_info');
    }
}
