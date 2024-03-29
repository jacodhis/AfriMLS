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
        Schema::create('config_property_selections', function (Blueprint $table) {
            $table->id();
            $table->string('category')->index();
            $table->unsignedBigInteger('property_id');
            $table->string('setting')->nullable();
            $table->string('selection')->nullable();
            $table->timestamps();

            $table->foreign('property_id')
              ->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config_property_selections');
    }
};
