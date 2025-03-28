@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg border-0 rounded-4" style="width: 400px;">
        <div class="card-body p-4">
            <h2 class="text-center mb-4 text-success fw-bold">Register</h2>

            {{-- Menampilkan error validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input type="text" name="username" class="form-control rounded-3" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control rounded-3" placeholder="Masukkan Password" required minlength="6">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Role</label>
                    <select name="role" class="form-control rounded-3" required>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Unit</label>
                    <select name="unit" class="form-control rounded-3" required>
                        <option value="">-- Pilih Unit --</option>
                        <option value="PLTA Singkarak">PLTA Singkarak</option>
                        <option value="PLTA Maninjau">PLTA Maninjau</option>
                        <option value="PLTA Batang Agam">PLTA Batang Agam</option>
                        <option value="PT PLN IP UBP Bukittinggi">PT PLN IP UBP Bukittinggi</option>
                    </select>
                </div>
                <button type="submit" class="btn w-100 text-white fw-semibold" style="background-color: #054A53ff; border-radius: 25px;">
                    Register
                </button>
            </form>

            <div class="text-center mt-3">
                <small>Sudah punya akun? <a href="/login" class="text-success fw-bold">Login</a></small>
            </div>
        </div>
    </div>
</div>
@endsection
