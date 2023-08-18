<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function (Blueprint $table) {
            $table->integerIncrements('no_transaksi_pinjam');
            $table->integer('kode_anggota');
            $table->string('nama_anggota', 50);
            $table->dateTime('tanggal_pinjam');
            $table->dateTime('tanggal_batas_kembali');
            $table->integer('kode_koleksi');
            $table->string('judul', 30);
            $table->string('jenis_bahan_pustaka', 25);
            $table->string('jenis_koleksi', 25);
            $table->string('jenis_media', 25);
            $table->integer('id_pengguna');
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
        Schema::dropIfExists('pinjam');
    }
};
