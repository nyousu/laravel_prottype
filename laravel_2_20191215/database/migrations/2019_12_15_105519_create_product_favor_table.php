<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFavorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_favor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_favor5');
            $table->string('product_favor4');
            $table->string('product_favor3');
            $table->string('product_favor2');
            $table->string('product_favor1');
            $table->string('product_favor0');
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
        Schema::dropIfExists('product_favor');
    }
}
