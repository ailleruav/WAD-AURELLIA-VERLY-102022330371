@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to bottom right, #ffe6f0, #fff0f5);
    }
    .card-dessert {
        background-color: #fff5fa;
        border-radius: 20px;
        border: none;
        box-shadow: 0 4px 20px rgba(255, 192, 203, 0.3);
    }
    .btn-dessert {
        background-color: #ff69b4;
        color: white;
        border-radius: 50px;
    }
    .btn-dessert:hover {
        background-color: #ff85c1;
    }
    .dessert-title {
        color: #ff4d88;
        font-weight: 700;
    }
</style>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card card-dessert p-5" style="width: 400px;">
        <h2 class="text-center dessert-title mb-4">🧁 Daftar Akun Dessert</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input id="name" type="text" class="form-control rounded-pill" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input id="email" type="email" class="form-control rounded-pill" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input id="password" type="password" class="form-control rounded-pill" name="password" required>
            </div>

            <div class="mb-3">
                <label for="password-confirm" class="form-label">Konfirmasi Sandi</label>
                <input id="password-confirm" type="password" class="form-control rounded-pill" name="password_confirmation" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-dessert">Daftar Sekarang</button>
            </div>

            <div class="mt-3 text-center">
                <a href="{{ route('login') }}" class="text-muted text-decoration-none">Sudah punya akun? Masuk yuk!</a>
            </div>
        </form>
    </div>
</div>
@endsection