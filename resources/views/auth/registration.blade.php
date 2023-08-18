@extends('layouts.auth')
@section('content')
<div class="container container-tight py-4">
    <div class="text-center mb-4">
        <a href="#" class="navbar-brand navbar-brand-autodark"><img src="/assets/img/static/logo.svg" height="36" alt=""></a>
    </div>
    <form id="formRegister" class="card card-md" method="post" action="{{ route('register') }}">
        @csrf
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Silahkan isi data diri</h2>
            <div class="form-floating mb-3">
                <input type="text" id="nama_pengguna" name="nama_pengguna" class="form-control" required autofocus>
                <label class="floating-input">Nama Pengguna</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" id="password" name="password" class="form-control" required>
                <label class="floating-input">Password</label>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-teal w-100">Daftar</button>
            </div>
        </div>
    </form>
    <div class="text-center text-muted mt-3">
        Ingin login? <a href="{{ route('start') }}" class="text-teal" tabindex="-1">Login disini</a>
    </div>
</div>
@endsection
