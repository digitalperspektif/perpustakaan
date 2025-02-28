<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LibrarianMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role === 'librarian') {
            return $next($request);
        }
        return redirect('/')->with('error', 'Akses ditolak! Hanya librarian yang dapat mengakses halaman ini.');
    }
}
