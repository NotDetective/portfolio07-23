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
        Schema::create('skils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programming_languages_id')->nullable()->constrained('programming_languages');
            $table->string('name', 100)->nullable();
            $table->string('color', 100)->nullable();
            $table->string('description', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skils');
    }
};
