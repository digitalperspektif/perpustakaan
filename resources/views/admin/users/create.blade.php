@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header text-white" style="background-color: #115E68ff !important;">
            <h4 class="mb-0 text-center">Tambah User</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required minlength="6">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Role</label>
                    <select name="role" class="form-select @error('role') is-invalid @enderror" required>
                        <option value="">-- Pilih Role --</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Unit</label>
                    <select name="unit" class="form-select @error('unit') is-invalid @enderror" required>
                        <option value="">-- Pilih Unit --</option>
                        <option value="PLTA Singkarak">PLTA Singkarak</option>
                        <option value="PLTA Maninjau">PLTA Maninjau</option>
                        <option value="PLTA Batang Agam">PLTA Batang Agam</option>
                        <option value="PT PLN IP UBP Bukittinggi">PT PLN IP UBP Bukittinggi</option>
                    </select>
                    @error('unit')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
