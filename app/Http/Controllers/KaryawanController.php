<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    // menampilkan halaman daftar karyawan
    public function index(){
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    // memanggil halaman form tambah karyawan
    public function create(){
        return view('karyawan.create');
    }

    // menyimpan data karyawan baru ke database
    public function store(Request $request)
    {
        // validasi input
        $request->validate([
            'nama' => 'required|string|max:150',
        ]);

        // simpan data karyawan ke database
        Karyawan::create($request->all());

        // redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    // menampilkan halaman form edit karyawan
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    // mengupdate data karyawan di database
    public function update(Request $request, $id)
    {
        // validasi input
        $request->validate([
            'nama' => 'required|string|max:150',
        ]);

        // update data karyawan di database
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());

        // redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        // redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus!');
    }
}
