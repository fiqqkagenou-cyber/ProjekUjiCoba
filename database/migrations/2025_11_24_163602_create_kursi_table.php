<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
 {
    Schema::create('kursi', function (Blueprint $table) {
        $table->id();
        $table->foreignId('gerbong_id')->constrained('gerbong')->onDelete('cascade');
        $table->string('nomor_kursi'); // contoh: 1A, 1B
        $table->enum('status', ['available', 'booked'])->default('available');
        $table->timestamps();
    });
  }
};
