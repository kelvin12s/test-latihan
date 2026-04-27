<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Menampilkan daftar semua dosen
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.index', compact('jurusan'));
    }

    /**
     * Menampilkan form tambah dosen
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Menyimpan data dosen baru
     */
    public function store(Request $request)
    {
        // Mengambil semua data dari form kecuali token
        $data = $request->except('_token');
        
        Jurusan::create($data);

        return redirect()->route('jurusan.index');
    }

    /**
     * Menampilkan form edit dosen berdasarkan ID
     */
    public function edit($id)
    {
        // Menggunakan find() agar lebih stabil mencari ID
        $jurusan = Jurusan::find($id);
        
        if (!$jurusan) {
            return redirect()->route('jurusan.index')->with('error', 'Data tidak ditemukan');
        }

        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Memperbarui data dosen di database
     */
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::find($id);
        
        // Mengambil semua data form kecuali token dan method PUT
        $data = $request->except(['_token', '_method']);
        
        $jurusan->update($data);

        return redirect()->route('jurusan.index');
    }

    /**
     * Menghapus data dosen
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();

        return redirect()->route('jurusan.index');
    }
}