@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header text-white text-center" style="background-color: #115E68ff !important;">
                    <h4>Profil Pengguna</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" value="{{ old('username', auth()->user()->username) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password (Kosongkan jika tidak ingin mengubah)</label>
                            <input type="password" name="password" class="form-control" placeholder="********">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <input type="text" class="form-control" value="{{ auth()->user()->role }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Unit</label>
                            <select name="unit" class="form-control" required>
                                <option value="PLTA Singkarak" {{ auth()->user()->unit == 'PLTA Singkarak' ? 'selected' : '' }}>PLTA Singkarak</option>
                                <option value="PLTA Maninjau" {{ auth()->user()->unit == 'PLTA Maninjau' ? 'selected' : '' }}>PLTA Maninjau</option>
                                <option value="PLTA Batang Agam" {{ auth()->user()->unit == 'PLTA Batang Agam' ? 'selected' : '' }}>PLTA Batang Agam</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Update Profil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
