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
        Schema::create('hasil_seleksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->enum('status', ['Lolos', 'Tidak Lolos'])->default('Tidak Lolos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_seleksis');
    }
};
