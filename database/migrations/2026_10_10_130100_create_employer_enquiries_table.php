<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Employer enquiries for the Pharmacist Evolve Integration Partnership.
     * Submitting does not reserve capacity or create a purchase commitment
     * (see the For Employers page). No named staff or sensitive employee
     * information is requested at this stage.
     */
    public function up(): void
    {
        Schema::create('employer_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name');
            $table->string('work_email');
            $table->string('organisation');
            $table->string('role');
            $table->string('number_of_pharmacists');
            $table->string('expected_start_month')->nullable();
            $table->text('support_need');
            $table->string('phone')->nullable();
            $table->string('status')->default('new'); // new, contacted, in_discussion, agreed, archived
            $table->timestamp('contacted_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employer_enquiries');
    }
};
