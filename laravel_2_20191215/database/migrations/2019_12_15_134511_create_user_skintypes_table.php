<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkintypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_skintypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('normal_skin');
            $table->string('dry_skin');
            $table->string('oil_skin');
            $table->string('combi_skin');
            $table->string('sensitive_skin');
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
        Schema::dropIfExists('user_skintypes');
    }
}
