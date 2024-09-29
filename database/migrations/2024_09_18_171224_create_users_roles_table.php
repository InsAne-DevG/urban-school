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
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->uuid('school_id')->nullable();
            $table->string('name');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');

            // Composite unique constraint
            $table->unique(['school_id', 'name']); 

            // Indexes
            $table->index('school_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
