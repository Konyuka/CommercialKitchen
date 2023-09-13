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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('lead_id')->default(null);
            $table->string('created_time')->default(null);
            $table->string('ad_id')->default(null);
            $table->string('ad_name')->default(null);
            $table->string('adset_id')->default(null);
            $table->string('adset_name')->default(null);
            $table->string('campaign_id')->default(null);
            $table->string('campaign_name')->default(null);
            $table->string('form_id')->default(null);
            $table->string('form_name')->default(null);
            $table->boolean('is_organic')->default(false);
            $table->string('platform')->default(null);
            $table->string('how_soon')->default(null);
            $table->string('full_name')->default(null);
            $table->string('phone_number')->default(null);
            $table->string('email')->default(null);
            $table->string('location')->nullable();
            $table->string('notes')->nullable();
            $table->integer('probability')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
