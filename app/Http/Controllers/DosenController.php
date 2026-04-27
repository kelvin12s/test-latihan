<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Menampilkan daftar semua dosen
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Menampilkan form tambah dosen
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Menyimpan data dosen baru
     */
    public function store(Request $request)
    {
        // Mengambil semua data dari form kecuali token
        $data = $request->except('_token');
        
        Dosen::create($data);

        return redirect()->route('dosen.index');
    }

    /**
     * Menampilkan form edit dosen berdasarkan ID
     */
    public function edit($id)
    {
        // Menggunakan find() agar lebih stabil mencari ID
        $dosen = Dosen::find($id);
        
        if (!$dosen) {
            return redirect()->route('dosen.index')->with('error', 'Data tidak ditemukan');
        }

        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Memperbarui data dosen di database
     */
    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id);
        
        // Mengambil semua data form kecuali token dan method PUT
        $data = $request->except(['_token', '_method']);
        
        $dosen->update($data);

        return redirect()->route('dosen.index');
    }

    /**
     * Menghapus data dosen
     */
    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();

        return redirect()->route('dosen.index');
    }
}