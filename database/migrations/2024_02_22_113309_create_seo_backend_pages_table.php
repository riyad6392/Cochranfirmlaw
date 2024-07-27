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
        Schema::create('seo_backend_pages', function (Blueprint $table) {
            $table->id();
            $table->string('head_one')->nullable();
            $table->string('head_two')->nullable();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_backend_pages');
    }
};
