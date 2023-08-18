<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\PenggunaModel as Pengguna;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::create(
            [
                'avatar'                => 'https://avatars.githubusercontent.com/u/117083636?v=4',
                'nama_pengguna'         => 'maulanakurniawan',
                'password'              => Hash::make('12345'),
                'hak_akses'             => 'administrator',
                'status'                => 'Belum meminjam',
            ],
            [
                'avatar'                => '/assets/img/static/avatars/006m.jpg',
                'nama_pengguna'         => 'user',
                'password'              => Hash::make('12345'),
                'hak_akses'             => 'anggota',
                'status'                => 'Belum meminjam',
            ],
        );
    }
}
