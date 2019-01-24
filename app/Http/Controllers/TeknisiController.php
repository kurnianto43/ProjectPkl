<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teknisi;
use App\Karyawan;
use Illuminate\Validation\Rule;

class TeknisiController extends Controller
{
     public function index()
    {
        $teknisis = Teknisi::all();
        return view('teknisi.index', compact('teknisis'));
    }

    public function create()
    {
        $karyawans = Karyawan::all();
        return view('teknisi.tambah',compact('karyawans'));
    }

    public function store()
    {
        $this->validate(request(), [
            'kode_teknisi' => 'required|unique:teknisis|max:4',
            'id_karyawan' => 'required',
        ]); 

        Teknisi::create([
            'kode_teknisi' => request('kode_teknisi'),
            'id_karyawan' => request('id_karyawan')
        ]);

        return redirect()->route('teknisi.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Teknisi $teknisi)
    {
        $karyawans = Karyawan::all();
        return view('teknisi.edit', compact('teknisi', 'karyawans'));
    }

    public function update(Teknisi $teknisi)
    {
        $this->validate(request(), [
            'kode_teknisi' => Rule::unique('teknisis', 'kode_teknisi')->ignore($teknisi->id_sukucadang),
            'kode_teknisi' => 'required|max:4',
            'id_karyawan' => 'required',
        ]); 

        $teknisi->update([
            'kode_teknisi' => request('kode_teknisi'),
            'id_karyawan' => request('id_karyawan')
        ]);

        return redirect()->route('teknisi.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Teknisi $teknisi)
    {
        $teknisi->delete();

        return redirect()->route('teknisi.index')->with('success', 'Data berhasil dihapus');
    }
}
