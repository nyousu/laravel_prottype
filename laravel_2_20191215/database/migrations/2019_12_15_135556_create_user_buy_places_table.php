<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBuyPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_buy_places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('drugstore');
            $table->string('departmentstore');
            $table->string('varietyshop');
            $table->string('onlineshopping');
            $table->string('retailstore');
            $table->string('specialtystore');
            $table->string('conveniencestore');
            $table->string('others');
            $table->string('businessuse');
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
        Schema::dropIfExists('user_buy_places');
    }
}
