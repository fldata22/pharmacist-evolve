<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Capture a phone number on the Register Interest form so the team can
     * follow up by call or text, not only email. Nullable at the DB level for
     * the handful of rows captured before this column existed; the form and
     * controller require it for new submissions.
     */
    public function up(): void
    {
        Schema::table('programme_interests', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
        });
    }

    public function down(): void
    {
        Schema::table('programme_interests', function (Blueprint $table) {
            $table->dropColumn('phone');
        });
    }
};
