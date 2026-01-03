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
        Schema::create('student_info', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_roll')->unique;
            $table->string('department');
            $table->string('semester');
            $table->string('shift')->nullable();
            $table->string('cgpa');
            $table->string('phone');
            $table->string('email');
            $table->text('address');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_info');
    }
};
