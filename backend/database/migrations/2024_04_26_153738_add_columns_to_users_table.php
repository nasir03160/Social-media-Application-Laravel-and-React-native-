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
        Schema::table('users', function (Blueprint $table) {
            $table->string(column:'username');
            $table->string(column:'cover_path',length:1024)->nullable();
            $table->string(column:'avatar_path',length:1024)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(columns:'username');
            $table->dropColumn(columns:'cover_path')->nullable();
            $table->dropColumn(columns:'avatar_path')->nullable();
        });
    }
};
