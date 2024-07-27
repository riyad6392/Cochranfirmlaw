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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->string('writen_by')->nullable();
            $table->string('blog_type')->nullable();
            $table->string('image')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->longText('slug');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
