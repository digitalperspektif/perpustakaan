<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $users = User::when($search, function ($query, $search) {
            return $query->where('username', 'like', "%$search%")
                ->orWhere('unit', 'like', "%$search%");
        })
            ->orderBy('id_user', 'asc')
            ->paginate(10);

        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:tab_login,username',
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,librarian,anggota',
            'unit' => 'required|in:PLTA Singkarak,PLTA Maninjau,PLTA Batang Agam',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'unit' => $request->unit
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:tab_login,username,' . $user->id_user . ',id_user',
            'password' => 'nullable|string|min:6',
            'role' => 'required|in:admin,librarian,anggota',
            'unit' => 'required|in:PLTA Singkarak,PLTA Maninjau,PLTA Batang Agam',
        ]);

        $data = $request->only(['username', 'role', 'unit']);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus!');
    }
}
