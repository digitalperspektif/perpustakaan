<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadFile;

class UploadFileController extends Controller
{
    public function index()
    {
        $files = UploadFile::all();
        return response()->json($files);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|string|max:10',
            'judul' => 'required|string|max:50',
            'nama_file' => 'required|string|max:50',
            'book_id' => 'nullable|integer'
        ]);

        $file = UploadFile::create($request->all());
        return response()->json(['message' => 'File berhasil diunggah', 'data' => $file]);
    }

    public function show($id)
    {
        $file = UploadFile::findOrFail($id);
        return response()->json($file);
    }

    public function update(Request $request, $id)
    {
        $file = UploadFile::findOrFail($id);
        $file->update($request->all());

        return response()->json(['message' => 'Data file diperbarui', 'data' => $file]);
    }

    public function destroy($id)
    {
        $file = UploadFile::findOrFail($id);
        $file->delete();
        return response()->json(['message' => 'File berhasil dihapus']);
    }
}
