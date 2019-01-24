<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use Illuminate\Validation\Rule;

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
        $this->validate(request(), [
            'nik_karyawan' => 'required|unique:karyawans|max:10',
            'nama_karyawan' => 'required|max:25',
            'jabatan' => 'required|max:25',
            'alamat' => 'required|max:100',
            'no_hp' => 'required|max:13',
            'foto_karyawan' =>'required|max:2500',
        ]);

        $uploadedFoto = $request->file('foto_karyawan');        

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
         $this->validate(request(), [
            'nik_karyawan' => Rule::unique('karyawans', 'nik_karyawan')->ignore($karyawan->id_karyawan),
            'nik_karyawan' => 'required|max:10',
            'nama_karyawan' => 'required|max:25',
            'jabatan' => 'required|max:25',
            'alamat' => 'required|max:100',
            'no_hp' => 'required|max:13',
            'foto_karyawan' =>'required|max:2500',
        ]);

        $karyawan->update([
            'nik_karyawan' => request('nik_karyawan'),
            'nama_karyawan' => request('nama_karyawan'),
            'jabatan' => request('jabatan'),
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
            'foto_karyawan' => request()->file('foto_karyawan')->store('foto-karyawan')
        ]);

        return redirect()->route('karyawan.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data berhasil dihapus');
    }
}
