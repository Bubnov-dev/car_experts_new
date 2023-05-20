<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->string('photo_dashboard')->nullable();
            $table->json('tires')->nullable();
            $table->boolean('tire_condition')->default(true);
            $table->boolean('tire_similar')->default(true);
            $table->string('comment_computer_diag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn(['tire_similar', 'tire_condition', 'photo_dashboard', 'tires', 'comment_computer_diag']);
        });
    }
};
