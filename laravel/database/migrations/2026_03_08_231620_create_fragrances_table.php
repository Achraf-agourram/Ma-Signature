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
        Schema::create('fragrances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('intensity', ['soft','moderate','strong']);
            $table->enum('season', ['winter','summer','spring']);
            $table->enum('vibe', ['bold','elegant','dark','fresh']);
            $table->text('image');
            $table->text('description');
            
            $table->foreignId('maison_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fragrances');
    }
};
