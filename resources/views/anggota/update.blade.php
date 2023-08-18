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
                    Data Anggota
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a class="btn btn-teal" href="{{ route('anggota') }}" aria-label="Kembali">
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
                    <h3 class="card-title">Ubah Anggota</h3>
                </div>
                <form method="post" action="{{ route('anggota.update', $anggota->kode_anggota) }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" id="nama_anggota" name="nama_anggota" class="form-control" value="{{ $anggota->nama_anggota }}" required autofocus>
                            <label class="floating-input">Nama Anggota</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" value="{{ $anggota->jenis_kelamin }}" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <label class="floating-input">Jenis Kelamin</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="{{ $anggota->tempat_lahir }}" required>
                            <label class="floating-input">Tempat Lahir</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ date('Y-m-d', strtotime($anggota->tanggal_lahir)) }}" required>
                            <label class="floating-input">Tanggal Lahir</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea id="alamat" name="alamat" class="form-control" data-bs-toggle="autosize" required>{{ $anggota->alamat }}</textarea>
                            <label class="floating-input">Alamat</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="no_hp" name="no_hp" class="form-control" data-mask="0000-0000-0000 0" data-mask-visible="true" value="{{ $anggota->no_hp }}" required>
                            <label class="floating-input">No. HP</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="jenis_id" name="jenis_id" class="form-control" value="{{ $anggota->jenis_id }}" required>
                            <label class="floating-input">Jenis ID</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" id="no_id" name="no_id" class="form-control" value="{{ $anggota->no_id }}" required>
                            <label class="floating-input">No. ID</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="jenis_anggota" name="jenis_anggota" class="form-control" value="{{ $anggota->jenis_anggota }}" required>
                            <label class="floating-input">Jenis Anggota</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="status" name="status" value="{{ $anggota->status }}" required>
                                <option value="Sudah Mengembalikan">Sudah Mengembalikan</option>
                                <option value="Meminjam">Meminjam</option>
                            </select>
                            <label class="floating-input">Status</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" id="jumlah_pinjam" name="jumlah_pinjam" class="form-control" value="{{ $anggota->jumlah_pinjam }}" required>
                            <label class="floating-input">Jumlah Pinjam</label>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a class="btn btn-ghost-red me-auto" href="{{ route('anggota') }}">Batal</a>
                        <button type="submit" class="btn btn-teal">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
