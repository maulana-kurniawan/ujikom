<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\TransportasiModel as Transportasi;

class TransportasiController extends Controller
{
    public function index()
    {
        $data = Transportasi::latest()->get();
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('transportasi.index', compact('data'))->with('i', 1);
    }

    public function add()
    {
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('transportasi.add');
    }


    public function store(Request $request)
    {
        $transportasi = new Transportasi;
        $transportasi->kode = $request->kode;
        $transportasi->jumlah_kursi = $request->jumlah_kursi;
        $transportasi->keterangan = $request->keterangan;
        $transportasi->id_tipe_transportasi = $request->id_tipe_transportasi;
        $transportasi->save();

        return redirect('transportasi')->withSuccess("Berhasil menambahkan data transportasi $request->nama_transportasi!");
    }

    public function edit(Transportasi $transportasi)
    {
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('transportasi.update', compact('transportasi'));
    }

    public function update(Request $request, $id)
    {
        $transportasi = Transportasi::find($id);
        $transportasi->kode = $request->kode;
        $transportasi->jumlah_kursi = $request->jumlah_kursi;
        $transportasi->keterangan = $request->keterangan;
        $transportasi->id_tipe_transportasi = $request->id_tipe_transportasi;
        $transportasi->save();

        return redirect('transportasi')->withSuccess("Berhasil mengubah data transportasi $request->nama_transportasi!");
    }

    public function destroy(Transportasi $transportasi)
    {
        $transportasi->delete();

        return redirect('transportasi')->withSuccess('Berhasil menghapus data transportasi!');
    }
}
