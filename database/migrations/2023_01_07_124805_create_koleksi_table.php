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
        Schema::create('koleksi', function (Blueprint $table) {
            $table->integerIncrements('kode_koleksi');
            $table->string('judul', 30);
            $table->string('jenis_bahan_pustaka', 25);
            $table->string('jenis_koleksi', 25);
            $table->string('jenis_media', 25);
            $table->string('pengarang', 50);
            $table->string('penerbit', 50);
            $table->string('tahun', 4);
            $table->string('cetakan', 25);
            $table->string('edisi', 25);
            $table->string('status', 25);
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
        Schema::dropIfExists('koleksi');
    }
};
