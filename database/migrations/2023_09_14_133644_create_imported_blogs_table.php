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
        Schema::create('imported_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('link')->nullable();
            $table->string('website')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imported_blogs');
    }
};
