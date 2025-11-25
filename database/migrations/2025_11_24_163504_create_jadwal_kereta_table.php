<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
   {
    Schema::create('jadwal_kereta', function (Blueprint $table) {
        $table->id();
        $table->foreignId('kereta_id')->constrained('kereta')->onDelete('cascade');
        $table->string('stasiun_asal');
        $table->string('stasiun_tujuan');
        $table->time('jam_berangkat');
        $table->time('jam_tiba');
        $table->integer('harga_tiket');
        $table->timestamps();
    });
   }
};
