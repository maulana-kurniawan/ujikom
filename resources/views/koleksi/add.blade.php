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
                    Data Buku
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a class="btn btn-teal" href="{{ route('koleksi') }}" aria-label="Kembali">
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
                    <h3 class="card-title">Tambah Buku</h3>
                </div>
                <form method="post" action="{{ route('koleksi.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" id="judul" name="judul" class="form-control" required autofocus>
                            <label class="floating-input">Judul</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="jenis_bahan_pustaka" name="jenis_bahan_pustaka" class="form-control" required>
                            <label class="floating-input">Jenis Bahan Pustaka</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="jenis_koleksi" name="jenis_koleksi" class="form-control" required>
                            <label class="floating-input">Jenis Koleksi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="jenis_media" name="jenis_media" class="form-control" required>
                            <label class="floating-input">Jenis Media</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="pengarang" name="pengarang" class="form-control" required>
                            <label class="floating-input">Pengarang</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="penerbit" name="penerbit" class="form-control" required>
                            <label class="floating-input">Penerbit</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" id="tahun" name="tahun" class="form-control" required>
                            <label class="floating-input">Tahun</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" id="cetakan" name="cetakan" class="form-control" required>
                            <label class="floating-input">Cetakan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" id="edisi" name="edisi" class="form-control" required>
                            <label class="floating-input">Edisi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="status" name="status" required>
                                <option selected disabled hidden value="">Pilih status</option>
                                <option value="Belum dipinjam">Belum dipinjam</option>
                                <option value="Sudah dipinjam">Sudah dipinjam</option>
                            </select>
                            <label class="floating-input">Status</label>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a class="btn btn-ghost-red me-auto" href="{{ route('koleksi') }}">Batal</a>
                        <button type="submit" class="btn btn-teal">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
