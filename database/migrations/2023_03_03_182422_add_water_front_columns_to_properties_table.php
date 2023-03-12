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
            $table->string('water_access')->nullable()->default('no')->after('category');
            $table->string('water_view')->nullable()->default('no')->after('water_access');
            $table->string('water_frontage')->nullable()->default('no')->after('water_view');
            $table->string('water_extras')->nullable()->default('no')->after('water_frontage');
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
