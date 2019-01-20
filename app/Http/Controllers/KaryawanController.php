<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.tambah');
    }

    public function store(Request $request)
    {

        // tampung berkas yang sudah diunggah ke variabel baru
        // 'file' merupakan nama input yang ada pada form
        $uploadedFoto = $request->file('foto_karyawan');        
        // simpan berkas yang diunggah ke sub-direktori 'public/files'
        // direktori 'files' otomatis akan dibuat jika belum ada
        $path = $uploadedFoto->store('foto-karyawan');

        karyawan::create([
            'nik_karyawan' => request('nik_karyawan'),
            'nama_karyawan' => request('nama_karyawan'),
            'jabatan' => request('jabatan'),
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
            'foto_karyawan' => $path
        ]);

        return redirect()->route('karyawan.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Karyawan $karyawan)
    {
        $karyawan->update([
            'nama_kondisi' => request('nama_kondisi'),
            'keterangan' => request('keterangan')
        ]);

        return redirect()->route('karyawan.index')->with('warning', 'Data berhasil diubah');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('danger', 'Data berhasil dihapus');
    }
}
