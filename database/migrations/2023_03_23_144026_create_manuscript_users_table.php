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
        Schema::create('manuscript_users', function (Blueprint $table) {
            $table->unsignedBigInteger('manuscript_id');
            $table->unsignedBigInteger('user_id');
            $table->tinyText('credit_order')->nullable();

            $table->foreign('manuscript_id')->references('id')->on('manuscripts')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manuscript_users');
    }
};
