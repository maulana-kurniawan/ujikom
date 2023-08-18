<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\PenggunaModel as Pengguna;

class AuthController extends Controller
{
    public function index()
    {
        if (Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda sudah login!");
        }

        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        if ($cek = Pengguna::where('nama_pengguna', $request->nama_pengguna)->first()) {
            if (Hash::check($request->password, $cek->password)) {
                Session::put('user', $cek);
                Session::put('logged', true);
                $sess = Session::get('user');
                return redirect('dashboard')->withSuccess("Selamat datang $sess->nama_pengguna!");
            }
        }

        return redirect('/')->withSuccess("Nama pengguna atau password anda salah!");
    }

    public function register()
    {
        if (Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda sudah login!");
        }

        return view('auth.registration');
    }

    public function registerAction(Request $request)
    {
        if (!Pengguna::where('nama_pengguna', $request->nama_pengguna)->exists()) {
            $data = $request->all();
            Pengguna::create(
                [
                    'avatar'            => '/assets/img/static/avatars/006m.jpg',
                    'nama_pengguna'     => $data['nama_pengguna'],
                    'password'          => Hash::make($data['password']),
                    'hak_akses'         => 'anggota',
                    'status'            => 'Belum meminjam',
                ]
            );

            return redirect('registration')->withSuccess("Berhasil mendaftarkan akun $request->nama_pengguna!");
        }

        return redirect("registration")->withSuccess("Username $request->username sudah dipakai!");
    }

    public function logout()
    {
        Session::flush();

        return redirect('/')->withSuccess("Berhasil keluar dari akun anda!");
    }
}
