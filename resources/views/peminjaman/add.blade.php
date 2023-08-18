@extends('layouts.app')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Data Master
                </div>
                <h2 class="page-title">
                    Data Peminjaman
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a class="btn btn-teal" href="{{ route('peminjaman') }}" aria-label="Kembali">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M5 12l6 6"></path>
                            <path d="M5 12l6 -6"></path>
                        </svg>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Peminjaman</h3>
                </div>
                <form method="post" action="{{ route('peminjaman.store') }}">
                    @csrf
                    <input type="hidden" id="kode_anggota" name="kode_anggota" class="form-control" value="{{ session('user.id_pengguna') }}" required>
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" class="form-control" required>
                            <label class="floating-input">Tanggal Pinjam</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" id="tanggal_batas_kembali" name="tanggal_batas_kembali" class="form-control" required>
                            <label class="floating-input">Tanggal Batas Kembali</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="judul" name="judul" required>
                                <option selected disabled hidden value="">Pilih buku</option>
                                @foreach($data as $d)
                                <option value="{{ $d->kode_koleksi }}">{{ $d->judul }}</option>
                                @endforeach
                            </select>
                            <label class="floating-input">Judul</label>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a class="btn btn-ghost-red me-auto" href="{{ route('peminjaman') }}">Batal</a>
                        <button type="submit" class="btn btn-teal">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
