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
                    Data Rute
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a class="btn btn-teal" href="{{ route('rute') }}" aria-label="Kembali">
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
                    <h3 class="card-title">Ubah Rute</h3>
                </div>
                <form method="post" action="{{ route('rute.update', $rute->id_rute) }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" id="tujuan" name="tujuan" class="form-control" value="{{ $rute->tujuan }}" required autofocus>
                            <label class="floating-input">Tujuan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="rute_awal" name="rute_awal" class="form-control" value="{{ $rute->rute_awal }}" required>
                            <label class="floating-input">Rute Awal</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="rute_akhir" name="rute_akhir" class="form-control" value="{{ $rute->rute_akhir }}" required>
                            <label class="floating-input">Rute Akhir</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="harga" name="harga" class="form-control" value="{{ $rute->harga }}" required>
                            <label class="floating-input">Harga (Rp)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="id_transportasi" name="id_transportasi" value="{{ $rute->id_transportasi }}" class="form-control" required>
                            <label class="floating-input">ID Transportasi</label>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a class="btn btn-ghost-red me-auto" href="{{ route('rute') }}">Batal</a>
                        <button type="submit" class="btn btn-teal">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_script')
<script>
    $(function() {
        $('#harga').inputmask({
            alias: 'numeric',
            groupSeparator: '.',
            digits: 0,
            digitsOptional: true
        });
    });
</script>
@endsection
