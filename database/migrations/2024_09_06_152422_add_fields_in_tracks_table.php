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
        Schema::table('tracks', function (Blueprint $table) {
            $table->boolean('is_public')->default(false)->after('status');
            $table->boolean('is_promo')->default(false)->after('is_public');
            $table->boolean('is_featured')->default(false)->after('is_promo');
            $table->dateTime('published_at')->nullable()->after('is_featured');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tracks', function (Blueprint $table) {
            $table->dropColumn(['is_public', 'is_promo', 'is_featured', 'published_at']);
        });
    }
};
