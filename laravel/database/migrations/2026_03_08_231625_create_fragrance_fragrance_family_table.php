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
        Schema::create('fragrance_fragrance_family', function (Blueprint $table) {
            $table->foreignId('fragrance_id')->constrained()->cascadeOnDelete();
            $table->foreignId('fragrance_family_id')->constrained()->cascadeOnDelete();
            $table->primary(['fragrance_id','fragrance_family_id']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fragrance_fragrance_family');
    }
};
