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
        Schema::create('user_fragrance_statuses', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(false);

            $table->foreignId('client_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('fragrance_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_fragrance_statuses');
    }
};
