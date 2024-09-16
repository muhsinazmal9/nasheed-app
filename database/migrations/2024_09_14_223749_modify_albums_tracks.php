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
        Schema::table('albums', function (Blueprint $table) {
            $table->string('cover_image')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->string('released_at')->nullable()->change();
            $table->boolean('status')->default(1)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->string('cover_image')->nullable(false)->change();
            $table->string('description')->nullable(false)->change();
            $table->string('released_at')->nullable(false)->change();
            $table->boolean('status')->default(false)->change();
        });
    }
};
