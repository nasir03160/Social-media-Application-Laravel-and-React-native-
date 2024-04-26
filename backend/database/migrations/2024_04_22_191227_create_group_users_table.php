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
        Schema::create('group_users', function (Blueprint $table) {
            $table->id();
            $table->string(column:'status',length:25); //aproved , pending
            $table->string(column:'role'); //admin,user
            $table->string(column:'token',length:1024)->nullable();
            $table->timestamp(column:'token_expire_date')->nullable();
            $table->timestamp(column:'token_used')->nullable();
            $table->foreignId(column:'user_id')->constrained(table:'users');
            $table->foreignId(column:'group_id')->constrained(table:'groups');
            $table->foreignId(column:'created_by')->constrained(table:'users');
            $table->timestamp(column:'created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_users');
    }
};
