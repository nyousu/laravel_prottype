<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCosmeinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cosmeinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('skintype_id');
            // $table->string('skin_type');
            // $table->string('skin_trouble');
            $table->string('use_brand');
            $table->string('like_brand');
            // $table->string('buy_place');
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users");
            // $table->foreign('skintype_id')->references('id')->on('skintypes');
            // $table->unique(['user_id', 'skintype_id'], 'uq_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cosmeinfos');
    }
}
