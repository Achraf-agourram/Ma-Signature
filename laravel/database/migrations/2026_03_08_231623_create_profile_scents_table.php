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
        Schema::create('profile_scents', function (Blueprint $table) {
            $table->id();
            $table->string('dominant_family');
            $table->string('preferred_intensity');
            $table->string('preferred_season');
            $table->string('vibe');

            $table->foreignId('client_id')->unique()->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_scents');
    }
};
