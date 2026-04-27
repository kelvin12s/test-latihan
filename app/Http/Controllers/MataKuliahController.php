<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Menampilkan daftar semua dosen
     */
    public function index()
    {
        $matakuliah = MataKuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    /**
     * Menampilkan form tambah dosen
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Menyimpan data dosen baru
     */
    public function store(Request $request)
    {
        // Mengambil semua data dari form kecuali token
        $data = $request->except('_token');
        
        MataKuliah::create($data);

        return redirect()->route('matakuliah.index');
    }

    /**
     * Menampilkan form edit dosen berdasarkan ID
     */
    public function edit($id)
    {
        // Menggunakan find() agar lebih stabil mencari ID
        $matakuliah = MataKuliah::find($id);
        
        if (!$matakuliah) {
            return redirect()->route('matakuliah.index')->with('error', 'Data tidak ditemukan');
        }

        return view('matakuliah.edit', compact('matakuliah'));
    }

    /**
     * Memperbarui data dosen di database
     */
    public function update(Request $request, $id)
    {
        $matakuliah = MataKuliah::find($id);
        
        // Mengambil semua data form kecuali token dan method PUT
        $data = $request->except(['_token', '_method']);
        
        $matakuliah->update($data);

        return redirect()->route('matakuliah.index');
    }

    /**
     * Menghapus data dosen
     */
    public function destroy($id)
    {
        $matakuliah = MataKuliah::find($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index');
    }
}