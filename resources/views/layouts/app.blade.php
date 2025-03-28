<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.container {
    flex: 1;
}

        .navbar, .footer {
            background-color: #ffff !important;
        }
        .navbar .navbar-brand{
            color: #115E68ff !important;
            margin: 0 10px;
        }
        .navbar .nav-link {
            color: #115E68ff !important;
            margin: 0 10px;
        }
        .footer {
            background-color: #115E68ff !important;
            color: #ffff;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/pln_logo.jpeg') }}" alt="Logo Perusahaan" style="width: 8%; margin-right: 10px;">
                Perpustakaan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('books.allBooks') }}">Buku</a></li>
                    @auth
                        @if(auth()->user()->role == 'admin')
                         <li class="nav-item"><a class="nav-link" href="{{ route('admin.books.index') }}">Kelola Buku</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.reports.index') }}">Laporan</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.users.index') }}">Manajemen User</a></li>
                        @endif
                        @if(auth()->user()->role == 'user')
                            <li class="nav-item"><a class="nav-link" href="{{ route('peminjaman.index') }}">Riwayat Peminjaman</a></li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Halo, {{ auth()->user()->username }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/profile">Lihat Profil</a></li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-2">
        @yield('content')
    </div>

    <footer class="footer  py-3 text-center text-white">
        <div class="container">
            <span>&copy; 2025 Perpustakaan - All Rights Reserved</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
