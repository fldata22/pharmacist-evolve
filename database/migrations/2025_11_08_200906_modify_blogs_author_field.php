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
        Schema::table('blogs', function (Blueprint $table) {
            // Drop the foreign key constraint and column
            $table->dropForeign(['author_id']);
            $table->dropColumn('author_id');
            
            // Add new author text field
            $table->string('author')->nullable()->after('featured_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            // Remove the text author field
            $table->dropColumn('author');
            
            // Restore the foreign key
            $table->foreignId('author_id')->nullable()->constrained('users')->onDelete('set null')->after('featured_image');
        });
    }
};
