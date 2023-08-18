@extends('layouts.auth')
@section('content')
<div class="container container-tight py-4">
    <div class="text-center mb-4">
        <a href="#" class="navbar-brand navbar-brand-autodark"><img src="/assets/img/static/logo.svg" height="36" alt=""></a>
    </div>
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Masuk ke akun anda</h2>
            <form id="formLogin" method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" id="nama_pengguna" name="nama_pengguna" class="form-control" autofocus required>
                    <label class="floating-input">Nama Pengguna</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password anda" required>
                    <label class="floating-input">Password</label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-teal w-100">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
