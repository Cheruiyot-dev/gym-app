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
        Schema::create('trainer_profile', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('bio')->nullable();
            $table->json('specializations')->nullable();
            $table->json('certifications')->nullable();
            $table->text('experience')->nullable();
            $table->text( 'location');
            $table->decimal('hourly_rate', 8, 2)->nullable();
            $table->json('availability_schedule')->nullable();
            $table->json('sample_workout_plans')->nullable();
            $table->json('social_media_links')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainer_profile');
    }
};
