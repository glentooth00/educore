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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

            // Identification
            $table->string('employee_id')->unique();

            // Personal Information
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix')->nullable();

            $table->enum('sex', [
                'Male',
                'Female',
            ])->nullable();

            $table->date('birth_date')->nullable();

            // Contact Information
            $table->string('email')->nullable()->unique();
            $table->string('contact_number')->nullable();
            $table->text('address')->nullable();

            // Employment Information
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->date('date_hired')->nullable();

            $table->enum('employment_status', [
                'Permanent',
                'Probationary',
                'Contractual',
                'Part-time',
            ])->default('Permanent');

            // Record Status
            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
