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
        Schema::create('school_subjects', function (Blueprint $table) {
            $table->id();
            $table->uuid('school_id');
            $table->unsignedBigInteger('subject_id');
            $table->string('subject_code')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

            // Unique constraints and indexes
            $table->unique(['school_id', 'subject_id']);
            $table->index('school_id');
            $table->index('subject_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_subjects');
    }
};
