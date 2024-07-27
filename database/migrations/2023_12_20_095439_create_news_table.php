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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('posted_by')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('short_description')->nullable();
            $table->string('redirect_site_url')->nullable();
            $table->string('select_option')->default('In The News');
            $table->string('sub_title')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
