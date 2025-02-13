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
        Schema::create('practice_areas', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('content_image')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->enum('practice_area_type',['civil_rigits','personal_injuries','employment']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practice_areas');
    }
};
