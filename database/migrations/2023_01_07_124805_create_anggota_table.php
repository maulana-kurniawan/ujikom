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
        Schema::create('anggota', function (Blueprint $table) {
            $table->integerIncrements('kode_anggota');
            $table->string('nama_anggota', 50);
            $table->string('jenis_kelamin', 10);
            $table->string('tempat_lahir', 50);
            $table->dateTime('tanggal_lahir');
            $table->string('alamat', 255);
            $table->string('no_hp', 15);
            $table->string('jenis_id', 25);
            $table->integer('no_id');
            $table->string('jenis_anggota', 25);
            $table->string('status', 25);
            $table->integer('jumlah_pinjam');
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
        Schema::dropIfExists('anggota');
    }
};
