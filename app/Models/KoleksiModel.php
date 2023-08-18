<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiModel extends Model
{
    use HasFactory;

    protected $table = 'koleksi';

    protected $primaryKey = 'kode_koleksi';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'judul',
        'jenis_bahan_pustaka',
        'jenis_koleksi',
        'jenis_media',
        'pengarang',
        'penerbit',
        'tahun',
        'cetakan',
        'edisi',
        'status',
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
