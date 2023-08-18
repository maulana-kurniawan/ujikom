<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengembalianModel extends Model
{
    use HasFactory;

    protected $table = 'kembali';

    protected $primaryKey = 'no_transaksi_kembali';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kode_anggota',
        'nama_anggota',
        'tanggal_pinjam',
        'tanggal_kembali',
        'kode_koleksi',
        'judul',
        'jenis_bahan_pustaka',
        'jenis_koleksi',
        'jenis_media',
        'denda',
        'keterangan',
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
