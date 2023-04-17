<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pseudo_id')->nullable();
            $table->string('master_name')->nullable();
            $table->string('master_lastname')->nullable();
            $table->string('master_lang')->nullable();
            $table->string('vin')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('body')->nullable();
            $table->string('body_color')->nullable();
            $table->string('engine_volume')->nullable();
            $table->string('engine_power')->nullable();
            $table->string('drive')->nullable();
            $table->string('specification')->nullable();
            $table->boolean('crashes')->default(false);
            $table->boolean('guarantee_check')->nullable();
            $table->string('guarantee_year')->nullable();
            $table->string('guarantee_month')->nullable();
            $table->string('tyre_manufacturer')->nullable();
            $table->string('tyre_year')->nullable();
            $table->string('tyre_photo')->nullable();
            $table->json('colored')->nullable();
            $table->json('equipment')->nullable();
            $table->json('photo_external_damage')->nullable();
            $table->json('photo_internal_damage')->nullable();
            $table->json('photo_external')->nullable();
            $table->json('photo_internal')->nullable();
            $table->boolean('functions_check')->nullable();
            $table->string('functions_problems')->nullable();
            $table->string('comment')->nullable();
            $table->string('computer_diag')->nullable();
            $table->string('video')->nullable();
            $table->string('price_value')->nullable();
            $table->string('price_currency')->nullable();
            $table->string('mileage')->nullable();
            $table->string('gearbox')->nullable();
            $table->string('photo_tech_info')->nullable();
            $table->string('photo_vin')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
