<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkintroublesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_skintroubles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dry');
            $table->string('wrinkle');
            $table->string('stain');
            $table->string('tekari');
            $table->string('saggy');
            $table->string('large_pores');
            $table->string('blackened_pores');
            $table->string('bags');
            $table->string('acne');
            $table->string('dull');
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
        Schema::dropIfExists('user_skintroubles');
    }
}
