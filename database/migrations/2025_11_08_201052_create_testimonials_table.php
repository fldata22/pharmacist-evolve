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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable(); // e.g., "Pharmacist at NHS"
            $table->string('photo')->nullable();
            $table->text('feedback');
            $table->integer('rating')->default(5); // 1-5 stars
            $table->string('program')->nullable(); // Which program they attended
            $table->boolean('featured')->default(false);
            $table->boolean('published')->default(false);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
