<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    use HasFactory;

    protected $table = 'pinjam';

    protected $primaryKey = 'no_transaksi_pinjam';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kode_anggota',
        'nama_anggota',
        'tanggal_pinjam',
        'tanggal_batas_kembali',
        'kode_koleksi',
        'judul',
        'jenis_bahan_pustaka',
        'jenis_koleksi',
        'jenis_media',
        'id_pengguna',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
