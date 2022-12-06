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
            $table->string('name')->nullable();
            $table->longText('image')->nullable();
             $table->string('price')->nullable()->default(0);

            $table->string('number_bedroom')->nullable();
            $table->string('number_bathroom')->nullable();;
            $table->string('number_floor')->nullable();
            $table->string('square')->nullable();

            $table->string('price_unit')->nullable();
            $table->string('is_feautured')->nullable()->default('yes');

            $table->string('fireplace')->nullable()->default('no');
            $table->string('owner_name')->nullable();
            $table->string('owner_phone')->nullable();
            $table->string('tenant_name')->nullable();
            $table->string('tenant_phone')->nullable();

            $table->string('dimensions_studio')->nullable();
            $table->string('dimensions_livingroom')->nullable();
            $table->string('dimensions_diningroom')->nullable();
            $table->string('dimensions_family_room')->nullable();
            $table->string('dimensions_kitchen')->nullable();
            $table->string('dimensions_master_bedroom')->nullable();
            $table->string('dimensions_room2')->nullable();
            $table->string('dimensions_room3')->nullable();
            $table->string('dimensions_balcony_porch')->nullable();
            $table->string('dimensions_balcony_porch2')->nullable();
            $table->string('dimensions_dinette')->nullable();
            $table->string('dimensions_bonus_room')->nullable();

            $table->string('period')->nullable();
            $table->string('house_no')->nullable();
            $table->string('street_name')->nullable();
            $table->string('street_type')->nullable();
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
            $table->string('mls_number')->nullable();

            $table->longText('description')->nullable();


            $table->unsignedBigInteger('location_id')->nullable();
            $table->index('location_id');



            $table->unsignedBigInteger('county_id')->nullable();
            $table->index('county_id');

            $table->unsignedBigInteger('city_id')->nullable();
            $table->index('city_id');


            $table->string('property_type')->nullable();
            $table->index('property_type');


            $table->string('category')->nullable();
            $table->index('category');
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
