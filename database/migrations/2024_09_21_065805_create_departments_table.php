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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->uuid('school_id');
            $table->string('department_name', 100);
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');

            // Composite unique constraint
            $table->unique(['school_id', 'department_name']); 
            
            // Index on school_id
            $table->index('school_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
