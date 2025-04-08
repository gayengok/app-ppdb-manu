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
        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_id')->nullable();
            $table->json('answers'); // menyimpan jawaban dalam format JSON
            $table->integer('score');
            $table->integer('total_possible');
            $table->decimal('percentage', 5, 2);
            $table->json('category_scores'); // menyimpan skor per kategori
            $table->boolean('passed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_attempts');
    }
};
