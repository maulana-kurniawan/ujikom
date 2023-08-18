<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\AnggotaModel as Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $data = Anggota::latest()->get();
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('anggota.index', compact('data'))->with('i', 1);
    }

    public function add()
    {
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('anggota.add');
    }


    public function store(Request $request)
    {
        $anggota = new Anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->tempat_lahir = $request->tempat_lahir;
        $anggota->tanggal_lahir = $request->tanggal_lahir;
        $anggota->alamat = $request->alamat;
        $anggota->no_hp = str_replace(array('-', '_', ' '), '', $request->no_hp);
        $anggota->jenis_id = $request->jenis_id;
        $anggota->no_id = $request->no_id;
        $anggota->jenis_anggota = $request->jenis_anggota;
        $anggota->status = $request->status;
        $anggota->jumlah_pinjam = $request->jumlah_pinjam;
        $anggota->save();

        return redirect('anggota')->withSuccess("Berhasil menambahkan data anggota $request->nama_anggota!");
    }

    public function edit(Anggota $anggota)
    {
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('anggota.update', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $anggota = Anggota::find($id);
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->tempat_lahir = $request->tempat_lahir;
        $anggota->tanggal_lahir = $request->tanggal_lahir;
        $anggota->alamat = $request->alamat;
        $anggota->no_hp = str_replace(array('-', '_', ' '), '', $request->no_hp);
        $anggota->jenis_id = $request->jenis_id;
        $anggota->no_id = $request->no_id;
        $anggota->jenis_anggota = $request->jenis_anggota;
        $anggota->status = $request->status;
        $anggota->jumlah_pinjam = $request->jumlah_pinjam;
        $anggota->save();

        return redirect('anggota')->withSuccess("Berhasil mengubah data anggota $request->nama_anggota!");
    }

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return redirect('anggota')->withSuccess('Berhasil menghapus data anggota!');
    }
}
