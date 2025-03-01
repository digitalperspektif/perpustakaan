<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Proses login
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            return redirect()->route('books.allBooks')->with('success', 'Login berhasil! Selamat datang, ' . $user->username);
        }

        return back()->withInput()->withErrors(['login' => 'Username atau password salah!']);
    }

    /**
     * Menampilkan halaman register
     */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Proses register
     */
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:tab_login',
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,librarian,anggota,pengguna_umum',
            'unit' => 'required|in:PLTA Singkarak,PLTA Maninjau,PLTA Batang Agam',
        ]);

        try {
            User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'unit' => $request->unit
            ]);

            return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['register' => 'Terjadi kesalahan saat registrasi. Silakan coba lagi.']);
        }
    }

    /**
     * Menampilkan halaman profil
     */
    public function showProfile()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    /**
     * Memperbarui profil pengguna
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'required|string|max:50|unique:tab_login,username,' . $user->id_user . ',id_user',
            'password' => 'nullable|string|min:6',
            'unit' => 'required|in:PLTA Singkarak,PLTA Maninjau,PLTA Batang Agam',
        ]);

        try {
            $user->username = $request->username;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
            $user->unit = $request->unit;
            $user->save();

            return back()->with('success', 'Profil berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->withErrors(['profile' => 'Terjadi kesalahan saat memperbarui profil.']);
        }
    }

    /**
     * Proses logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
}
