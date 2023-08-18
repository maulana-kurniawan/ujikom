<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\KoleksiModel as Koleksi;

class KoleksiController extends Controller
{
    public function index()
    {
        $data = Koleksi::latest()->get();
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('koleksi.index', compact('data'))->with('i', 1);
    }

    public function add()
    {
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('koleksi.add');
    }


    public function store(Request $request)
    {
        $koleksi = new Koleksi;
        $koleksi->judul = $request->judul;
        $koleksi->jenis_bahan_pustaka = $request->jenis_bahan_pustaka;
        $koleksi->jenis_koleksi = $request->jenis_koleksi;
        $koleksi->jenis_media = $request->jenis_media;
        $koleksi->pengarang = $request->pengarang;
        $koleksi->penerbit = $request->penerbit;
        $koleksi->tahun = $request->tahun;
        $koleksi->cetakan = $request->cetakan;
        $koleksi->edisi = $request->edisi;
        $koleksi->status = $request->status;
        $koleksi->save();

        return redirect('koleksi')->withSuccess("Berhasil menambahkan data koleksi $request->judul!");
    }

    public function edit(Koleksi $koleksi)
    {
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('koleksi.update', compact('koleksi'));
    }

    public function update(Request $request, $id)
    {
        $koleksi = Koleksi::find($id);
        $koleksi->judul = $request->judul;
        $koleksi->jenis_bahan_pustaka = $request->jenis_bahan_pustaka;
        $koleksi->jenis_koleksi = $request->jenis_koleksi;
        $koleksi->jenis_media = $request->jenis_media;
        $koleksi->pengarang = $request->pengarang;
        $koleksi->penerbit = $request->penerbit;
        $koleksi->tahun = $request->tahun;
        $koleksi->cetakan = $request->cetakan;
        $koleksi->edisi = $request->edisi;
        $koleksi->status = $request->status;
        $koleksi->save();

        return redirect('koleksi')->withSuccess("Berhasil mengubah data koleksi $request->judul!");
    }

    public function destroy(Koleksi $koleksi)
    {
        $koleksi->delete();

        return redirect('koleksi')->withSuccess('Berhasil menghapus data koleksi!');
    }
}
