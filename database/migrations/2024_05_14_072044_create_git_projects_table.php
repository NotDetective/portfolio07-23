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
        Schema::create('git_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programming_language_id')->constrained()->onDelete('cascade');
            $table->string('name', 255);
            $table->text('description');
            $table->boolean('archived');
            $table->timestamp('last_update');
            $table->string('url', 255);
            $table->enum('status', ['approved', 'pending', 'rejected']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('git_projects');
    }
};
