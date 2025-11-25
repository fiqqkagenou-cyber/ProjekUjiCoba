<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
  {
    Schema::create('pemesanan', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('jadwal_id')->constrained('jadwal_kereta')->onDelete('cascade');
        $table->date('tanggal_pemesanan');
        $table->integer('total_harga');
        $table->enum('status', ['pending', 'paid', 'canceled'])->default('pending');
        $table->timestamps();
    });
   }
};
