<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisMasalah;
use Illuminate\Validation\Rule;

class JenismasalahController extends Controller
{
    public function index()
    {
        $jenismasalahs = JenisMasalah::all();
        return view('jenismasalah.index', compact('jenismasalahs'));
    }

    public function create()
    {
        return view('jenismasalah.tambah');
    }

    public function store()
    {
         $this->validate(request(), [
            'kode_jenis_masalah' => 'required|unique:jenis_masalahs|max:20',
            'keterangan_jenis_masalah' => 'required|max:50',
        ]);

        JenisMasalah::create([
            'kode_jenis_masalah' => request('kode_jenis_masalah'),
            'keterangan_jenis_masalah' => request('keterangan_jenis_masalah')
        ]);

        return redirect()->route('jenismasalah.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(JenisMasalah $jenismasalah)
    {
        return view('jenismasalah.edit', compact('jenismasalah'));
    }

    public function update(JenisMasalah $jenismasalah)
    {
        $this->validate(request(), [
            'kode_jenis_masalah' => Rule::unique('jenis_masalahs', 'kode_jenis_masalah')->ignore($jenismasalah->id_kondisi),
            'kode_jenis_masalah' => 'required|max:20',
            'keterangan_jenis_masalah' => 'required|max:50',
        ]);

        $jenismasalah->update([
            'kode_jenis_masalah' => request('kode_jenis_masalah'),
            'keterangan_jenis_masalah' => request('keterangan_jenis_masalah')
        ]);

        return redirect()->route('jenismasalah.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(JenisMasalah $jenismasalah)
    {
        $jenismasalah->delete();

        return redirect()->route('jenismasalah.index')->with('success', 'Data berhasil dihapus');
    }
}
