<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Register Interest submissions for the Pharmacist Evolve Transition
     * Programme, captured before applications open. No payment is taken and
     * no place is reserved (see the For Pharmacists page).
     */
    public function up(): void
    {
        Schema::create('programme_interests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('email');
            $table->string('career_stage');
            $table->text('support_need')->nullable();
            $table->string('status')->default('new'); // new, contacted, invited, archived
            $table->timestamp('contacted_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programme_interests');
    }
};
