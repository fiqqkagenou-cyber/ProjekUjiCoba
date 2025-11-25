<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
 {
    Schema::create('gerbong', function (Blueprint $table) {
        $table->id();
        $table->foreignId('kereta_id')->constrained('kereta')->onDelete('cascade');
        $table->string('nama_gerbong'); // contoh: A, B, C
        $table->string('kelas'); // Ekonomi, Bisnis, Eksekutif
        $table->timestamps();
    });
  }
};
