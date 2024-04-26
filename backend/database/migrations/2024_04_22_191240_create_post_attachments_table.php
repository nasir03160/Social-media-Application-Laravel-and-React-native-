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
        Schema::create('post_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'post_id')->constrained(table:'posts');
            $table->string(column:'name',length:225); //test
            $table->string(column:'path',length:255);
            $table->string(column:'mime',length:255); //image
            $table->foreignId(column:'created_by')->constrained(table:'users');
            $table->timestamp(column:'created_at')->nullable();
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_attachments');
    }
};
