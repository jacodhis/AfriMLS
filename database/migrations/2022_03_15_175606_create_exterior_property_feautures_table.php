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
        Schema::create('exterior_property_feautures', function (Blueprint $table) {
            $table->id();
            $table->string('exterior_feauture_id')->deafault('1');

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
        Schema::dropIfExists('exterior_property_feautures');
    }
};
