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

            $table->string('number_bedroom')->nullable()->default(2);
            $table->string('number_bathroom')->nullable()->default(3);
            $table->string('number_floor')->nullable()->default(5);
            $table->string('square')->nullable()->default('null');

            $table->string('price_unit')->nullable()->default(200);
            $table->string('is_feautured')->nullable()->default('yes');
            $table->string('currency_id')->nullable()->default(1);
            $table->string('period')->nullable()->default(5);
            $table->string('house_no')->nullable()->default(4);
            $table->string('street_name')->nullable()->default('xyz');
            $table->string('street_type')->nullable()->default('abc');
            $table->string('str_dir')->nullable();
            $table->string('zip')->nullable();
            $table->string('unit_no')->nullable();
            $table->string('condo_building')->nullable();
            $table->string('condo_floor')->nullable();
            $table->string('building_no_floors')->nullable();
            $table->string('building_name_number')->nullable();
            $table->string('floors_in_unit')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('taxes')->nullable();
            $table->string('tax_year')->nullable();

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
