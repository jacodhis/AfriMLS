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
        Schema::create('community_feautures', function (Blueprint $table) {
            $table->id();
            $table->string('community_feauture_id')->deafault('1');

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
        Schema::dropIfExists('community_feautures');
    }
};
