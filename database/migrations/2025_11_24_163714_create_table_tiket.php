<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
  {
    Schema::create('tiket', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pemesanan_id')->constrained('pemesanan')->onDelete('cascade');
        $table->foreignId('kursi_id')->constrained('kursi')->onDelete('cascade');
        $table->string('kode_tiket')->unique();
        $table->timestamps();
    });
   }
};
