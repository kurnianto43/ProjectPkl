<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipePekerjaan;
use Illuminate\Validation\Rule;

class TipepekerjaanController extends Controller
{
    public function index()
    {
        $tipepekerjaans = TipePekerjaan::all();
        return view('tipepekerjaan.index', compact('tipepekerjaans'));
    }

    public function create()
    {
        return view('tipepekerjaan.tambah');
    }

    public function store()
    {
         $this->validate(request(), [
            'kode_tipe_pekerjaan' => 'required|unique:tipe_pekerjaans|max:10',
            'keterangan_tipe_pekerjaan' => 'required|max:100',
            'tarif' => 'required'
        ]);

        TipePekerjaan::create([
            'kode_tipe_pekerjaan' => request('kode_tipe_pekerjaan'),
            'keterangan_tipe_pekerjaan' => request('keterangan_tipe_pekerjaan'),
            'tarif' => request('tarif')
        ]);

        return redirect()->route('tipepekerjaan.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(TipePekerjaan $tipepekerjaan)
    {
        return view('tipepekerjaan.edit', compact('tipepekerjaan'));
    }

    public function update(TipePekerjaan $tipepekerjaan)
    {
        $this->validate(request(), [
            'kode_tipe_pekerjaan' => Rule::unique('tipe_pekerjaans', 'kode_tipe')->ignore($tipepekerjaan->id_tipe_pekerjaan),
            'kode_tipe_pekerjaan' => 'required|max:10',
            'keterangan_tipe_pekerjaan' => 'required|max:100',
            'tarif' => 'required'
        ]);

        $tipepekerjaan->update([
           'kode_tipe_pekerjaan' => request('kode_tipe_pekerjaan'),
            'keterangan_tipe_pekerjaan' => request('keterangan_tipe_pekerjaan'),
            'tarif' => request('tarif')
        ]);

        return redirect()->route('tipepekerjaan.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(TipePekerjaan $tipepekerjaan)
    {
        $tipepekerjaan->delete();

        return redirect()->route('tipepekerjaan.index')->with('success', 'Data berhasil dihapus');
    }
}
