<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCosmeinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cosmeinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('skin_type');
            $table->string('skin_trouble');
            $table->string('use_brand');
            $table->string('like_brand');
            $table->string('buy_place');
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
        Schema::dropIfExists('user_cosmeinfos');
    }
}
