@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg border-0 rounded-4" style="width: 400px;">
        <div class="card-body p-4">
            <h2 class="text-center mb-4 text-success fw-bold">Login</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input type="text" name="username" class="form-control rounded-3" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control rounded-3" placeholder="Masukkan Password" required>
                </div>
                <button type="submit" class="btn w-100 text-white fw-semibold" style="background-color: #4B8F29; border-radius: 25px;">
                    Login
                </button>
            </form>

            <div class="text-center mt-3">
                <small>Belum punya akun? <a href="/register" class="text-success fw-bold">Daftar</a></small>
            </div>
        </div>
    </div>
</div>
@endsection
