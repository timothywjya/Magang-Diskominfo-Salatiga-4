<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('keperluan');
            $table->bigInteger('no_hp');
            $table->dateTime('waktu_awal');
            $table->dateTime('waktu_akhir');
            $table->enum('status', ['pending', 'terima', 'tolak'])->default('pending');
            $table->bigInteger('gor_dipinjam_id');
            $table->bigInteger('user_peminjam_id');
            $table->bigInteger('arena_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
