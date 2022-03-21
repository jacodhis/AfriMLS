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
        Schema::create('garage_property_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('garage_feauture_id');
            $table->index('garage_feauture_id');

            $table->unsignedBigInteger('property_id');
            $table->index('property_id');

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
        Schema::dropIfExists('garage_property_features');
    }
};
