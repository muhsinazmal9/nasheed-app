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
        Schema::dropIfExists("album_track");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('album_track', function (Blueprint $table) {
            $table->foreignId('album_id')->constrained('albums')->onDelete('cascade');
            $table->foreignId('track_id')->constrained('tracks')->onDelete('cascade');
        });
    }
};
