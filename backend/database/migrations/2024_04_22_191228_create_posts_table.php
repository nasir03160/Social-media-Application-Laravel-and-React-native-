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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->longText(column:'body')->nullable();
            $table->foreignId(column:'created_by')->constrained(table:'user');
            $table->foreignId(column:'updated_by')->constrained(table:'user');
            $table->timestamp(column:'deleted_at')->nullable();
            $table->foreignId(column:'deleted_by')->nullable()->constrained(table:'user');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
