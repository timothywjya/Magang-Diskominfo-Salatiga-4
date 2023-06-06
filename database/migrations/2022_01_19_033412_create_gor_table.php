<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gor', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gor');
            $table->string('fungsi_gedung');
            $table->string('jumlah_tempat');
            $table->string('alamat_gedung');
            $table->string('spesifikasi_gedung');
            $table->string('foto_gedung');
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
        Schema::dropIfExists('gor');
    }
}
