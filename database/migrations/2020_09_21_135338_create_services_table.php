<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->boolean('wifi');
            $table->boolean('parking');
            $table->boolean('pets_allowed');
            $table->boolean('air_conditioning');
            $table->boolean('swimming_pool');
            $table->boolean('washingmachine');
            $table->boolean('tv');
            $table->boolean('kitchen');
            $table->boolean('breakfast');

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
        Schema::dropIfExists('services');
    }
}
