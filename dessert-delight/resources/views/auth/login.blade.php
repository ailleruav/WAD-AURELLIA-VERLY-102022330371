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
        <h2 class="text-center dessert-title mb-4">🍓 Masuk ke Dunia Dessert</h2>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input id="email" type="email" class="form-control rounded-pill" name="email" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input id="password" type="password" class="form-control rounded-pill" name="password" required>
            </div>

            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">Ingat saya</label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-dessert">Masuk Sekarang</button>
            </div>

            <div class="mt-3 text-center">
                <a href="{{ route('register') }}" class="text-muted text-decoration-none">Belum punya akun? Daftar yuk!</a>
            </div>
        </form>
    </div>
</div>
@endsection