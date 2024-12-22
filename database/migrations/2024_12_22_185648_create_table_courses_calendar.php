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
        Schema::create('course_calendar', function (Blueprint $table) {
            $table->id();
            $table->string('course_name')->nullable();
            $table->string('day')->nullable();
            $table->string('time')->nullable();
            $table->string('location')->nullable();
            $table->string('instructor')->nullable();
            $table->string('status')->nullable();
            $table->string('description')->nullable();
            $table->string('course_code')->nullable();
            $table->string('course_type')->nullable();
            $table->string('course_duration')->nullable();
            $table->string('course_fee')->nullable();
            $table->string('course_image')->nullable();
            $table->string('course_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_calendar');
    }
};
