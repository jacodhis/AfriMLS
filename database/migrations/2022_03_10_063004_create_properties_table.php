<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('price');
            $table->longText('description')->nullable();

            $table->unsignedBigInteger('location_id');
            $table->index('location_id');



            $table->unsignedBigInteger('county_id');
            $table->index('county_id');

            $table->unsignedBigInteger('option_id');
            $table->index('option_id');


            $table->unsignedBigInteger('category_id');
            $table->index('category_id');
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
        Schema::dropIfExists('properties');
    }
};
