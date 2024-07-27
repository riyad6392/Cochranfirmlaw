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
        Schema::create('out_reaches', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('posted_by')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('redirect_site_url')->nullable();
            $table->longText('short_description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('out_reaches');
    }
};
