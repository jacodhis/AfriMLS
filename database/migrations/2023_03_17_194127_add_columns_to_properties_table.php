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
        Schema::table('properties', function (Blueprint $table) {
            $table->string('price_per_acre')->nullable()->after('price');
            $table->string('legal_subdivision_name')->nullable()->after('price_per_acre');
            $table->string('zoning')->nullable()->after('legal_subdivision_name');
            $table->string('lot_dimensions')->nullable()->after('dimensions_bonus_room');
            $table->string('lot_size_sqft')->nullable()->after('lot_dimensions');
            $table->string('lot_size_acre')->nullable()->after('lot_size_sqft');
            $table->string('front_footage')->nullable()->after('lot_size_acre');
            $table->string('availability')->nullable()->after('description');
            $table->string('easements')->nullable()->after('availability');
            $table->dateTime('expires_on')->nullable()->after('water_frontage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn(['water_access',  'water_view', 'water_frontage',  'water_extras']);
        });
    }
};
