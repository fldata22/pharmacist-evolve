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
        Schema::create('delegates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable()->unique();
            $table->string('organization')->nullable();
            $table->string('role')->nullable();
            $table->string('country')->nullable();
            $table->text('bio')->nullable();
            $table->string('photo')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('website_url')->nullable();
            $table->string('delegate_type')->default('attendee'); // attendee, speaker, sponsor, partner
            $table->boolean('is_published')->default(false);
            $table->integer('order')->default(0);
            $table->timestamp('registered_at')->nullable();
            $table->timestamps();

            // Indexes for frequently queried fields
            $table->index('delegate_type');
            $table->index('is_published');
            $table->index('order');
            $table->index(['is_published', 'delegate_type']);
            $table->index(['is_published', 'order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delegates');
    }
};
