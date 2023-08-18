<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel as Anggota;
use App\Models\KoleksiModel as Koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\PeminjamanModel as Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data = Peminjaman::latest()->get();
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('peminjaman.index', compact('data'))->with('i', 1);
    }

    public function add()
    {
        $data = Koleksi::latest()->get();
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('peminjaman.add', compact('data'));
    }


    public function store(Request $request)
    {
        $peminjaman = new Peminjaman;
        $koleksi = Koleksi::where('kode_koleksi', '=', $request->judul)->first();
        $anggota = Anggota::where('kode_anggota', '=', $request->kode_anggota)->first();
        $peminjaman->kode_anggota = $request->kode_anggota;
        $peminjaman->nama_anggota = $anggota->nama_anggota;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->tanggal_batas_kembali = $request->tanggal_batas_kembali;
        $peminjaman->kode_koleksi = $request->judul;
        $peminjaman->judul = $koleksi->judul;
        $peminjaman->jenis_bahan_pustaka = $koleksi->jenis_bahan_pustaka;
        $peminjaman->jenis_koleksi = $koleksi->jenis_koleksi;
        $peminjaman->jenis_media = $koleksi->jenis_media;
        $peminjaman->id_pengguna = $request->kode_anggota;
        $peminjaman->save();

        return redirect('peminjaman')->withSuccess("Berhasil menambahkan data peminjaman $request->nama_anggota!");
    }

    public function edit(Peminjaman $peminjaman)
    {
        $data = Koleksi::latest()->get();
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('peminjaman.update', compact('peminjaman', 'data'));
    }

    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::find($id);
        $koleksi = Koleksi::where('kode_koleksi', '=', $request->judul)->first();
        $anggota = Anggota::where('kode_anggota', '=', $request->kode_anggota)->first();
        $peminjaman->kode_anggota = $request->kode_anggota;
        $peminjaman->nama_anggota = $anggota->nama_anggota;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->tanggal_batas_kembali = $request->tanggal_batas_kembali;
        $peminjaman->kode_koleksi = $request->judul;
        $peminjaman->judul = $koleksi->judul;
        $peminjaman->jenis_bahan_pustaka = $koleksi->jenis_bahan_pustaka;
        $peminjaman->jenis_koleksi = $koleksi->jenis_koleksi;
        $peminjaman->jenis_media = $koleksi->jenis_media;
        $peminjaman->id_pengguna = $request->kode_anggota;
        $peminjaman->save();

        return redirect('peminjaman')->withSuccess("Berhasil mengubah data peminjaman $request->nama_anggota!");
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect('peminjaman')->withSuccess('Berhasil menghapus data peminjaman!');
    }
}
