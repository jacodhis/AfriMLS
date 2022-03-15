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
        Schema::create('utility_property_features', function (Blueprint $table) {
            $table->id();
            // $table->string('utility_data_id')->deafault('1');

            $table->unsignedBigInteger('utility_data_id');
            $table->index('utility_data_id');

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
        Schema::dropIfExists('utility_property_features');
    }
};
