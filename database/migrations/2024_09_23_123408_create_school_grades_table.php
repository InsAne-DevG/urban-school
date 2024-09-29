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
        Schema::create('school_grades', function (Blueprint $table) {
            $table->id();
            $table->uuid('school_id');
            $table->unsignedBigInteger('grade_level_id');
            $table->unsignedBigInteger('grade_section_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('grade_level_id')->references('id')->on('grade_levels')->onDelete('cascade');
            $table->foreign('grade_section_id')->references('id')->on('grade_sections')->onDelete('cascade');

            // Composite unique constraint
            $table->unique(['school_id', 'grade_level_id', 'grade_section_id']); 

            // Indexes
            $table->index('school_id');
            $table->index('grade_level_id');
            $table->index('grade_section_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_grades');
    }
};
