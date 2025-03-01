@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header text-white" style="background-color: #90C36F !important;">
            <h4 class="mb-0 text-center">Edit User</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.users.update', $user->id_user) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold">Username</label>
                    <input type="text" name="username" class="form-control" value="{{ $user->username }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Password <small class="text-muted">(Kosongkan jika tidak ingin mengubah)</small></label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Role</label>
                    <select name="role" class="form-select" required>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="librarian" {{ $user->role == 'librarian' ? 'selected' : '' }}>Librarian</option>
                        <option value="anggota" {{ $user->role == 'anggota' ? 'selected' : '' }}>Anggota</option>
                        <option value="pengguna_umum" {{ $user->role == 'pengguna_umum' ? 'selected' : '' }}>Pengguna Umum</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Unit</label>
                    <select name="unit" class="form-select" required>
                        <option value="PLTA Singkarak" {{ $user->unit == 'PLTA Singkarak' ? 'selected' : '' }}>PLTA Singkarak</option>
                        <option value="PLTA Maninjau" {{ $user->unit == 'PLTA Maninjau' ? 'selected' : '' }}>PLTA Maninjau</option>
                        <option value="PLTA Batang Agam" {{ $user->unit == 'PLTA Batang Agam' ? 'selected' : '' }}>PLTA Batang Agam</option>
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
