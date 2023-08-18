<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel as Anggota;
use App\Models\KoleksiModel as Koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\PengembalianModel as Pengembalian;

class PengembalianController extends Controller
{
    public function index()
    {
        $data = Pengembalian::latest()->get();
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('pengembalian.index', compact('data'))->with('i', 1);
    }

    public function add()
    {
        $data = Koleksi::latest()->get();
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('pengembalian.add', compact('data'));
    }


    public function store(Request $request)
    {
        $pengembalian = new Pengembalian;
        $koleksi = Koleksi::where('kode_koleksi', '=', $request->judul)->first();
        $anggota = Anggota::where('kode_anggota', '=', $request->kode_anggota)->first();
        $pengembalian->kode_anggota = $request->kode_anggota;
        $pengembalian->nama_anggota = $anggota->nama_anggota;
        $pengembalian->tanggal_pinjam = $request->tanggal_pinjam;
        $pengembalian->tanggal_kembali = $request->tanggal_kembali;
        $pengembalian->kode_koleksi = $request->judul;
        $pengembalian->judul = $koleksi->judul;
        $pengembalian->jenis_bahan_pustaka = $koleksi->jenis_bahan_pustaka;
        $pengembalian->jenis_koleksi = $koleksi->jenis_koleksi;
        $pengembalian->jenis_media = $koleksi->jenis_media;
        $pengembalian->denda = str_replace('.', '', $request->denda);
        $pengembalian->keterangan = $request->keterangan;
        $pengembalian->id_pengguna = $request->kode_anggota;
        $pengembalian->save();

        return redirect('pengembalian')->withSuccess("Berhasil menambahkan data pengembalian $request->nama_anggota!");
    }

    public function edit(Pengembalian $pengembalian)
    {
        $data = Koleksi::latest()->get();
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('pengembalian.update', compact('pengembalian', 'data'));
    }

    public function update(Request $request, $id)
    {
        $pengembalian = Pengembalian::find($id);
        $koleksi = Koleksi::where('kode_koleksi', '=', $request->judul)->first();
        $anggota = Anggota::where('kode_anggota', '=', $request->kode_anggota)->first();
        $pengembalian->kode_anggota = $request->kode_anggota;
        $pengembalian->nama_anggota = $anggota->nama_anggota;
        $pengembalian->tanggal_pinjam = $request->tanggal_pinjam;
        $pengembalian->tanggal_kembali = $request->tanggal_kembali;
        $pengembalian->kode_koleksi = $request->judul;
        $pengembalian->judul = $koleksi->judul;
        $pengembalian->jenis_bahan_pustaka = $koleksi->jenis_bahan_pustaka;
        $pengembalian->jenis_koleksi = $koleksi->jenis_koleksi;
        $pengembalian->jenis_media = $koleksi->jenis_media;
        $pengembalian->denda = str_replace('.', '', $request->denda);
        $pengembalian->keterangan = $request->keterangan;
        $pengembalian->id_pengguna = $request->kode_anggota;
        $pengembalian->save();

        return redirect('pengembalian')->withSuccess("Berhasil mengubah data pengembalian $request->nama_anggota!");
    }

    public function destroy(Pengembalian $pengembalian)
    {
        $pengembalian->delete();

        return redirect('pengembalian')->withSuccess('Berhasil menghapus data pengembalian!');
    }
}
