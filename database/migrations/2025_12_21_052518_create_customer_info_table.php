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
        Schema::create('customer_info', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('customer_id')->unique;
            $table->string('email');
            $table->string('phone');
            $table->text('address')->nullable();
            $table->decimal('due',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_info');
    }
};
