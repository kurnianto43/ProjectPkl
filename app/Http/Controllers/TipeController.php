<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipe;
use Illuminate\Validation\Rule;

class TipeController extends Controller
{
    public function index()
    {
        $tipes = Tipe::all();
        return view('tipe.index', compact('tipes'));
    }

    public function create()
    {
        return view('tipe.tambah');
    }

    public function store()
    {
         $this->validate(request(), [
            'nama_tipe' => 'required|unique:tipes|max:4',
            'keterangan_tipe' => 'required|max:50',
        ]);

        Tipe::create([
            'nama_tipe' => request('nama_tipe'),
            'keterangan_tipe' => request('keterangan_tipe')
        ]);

        return redirect()->route('tipe.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Tipe $tipe)
    {
        return view('tipe.edit', compact('tipe'));
    }

    public function update(Tipe $tipe)
    {
        $this->validate(request(), [
            'nama_tipe' => Rule::unique('tipes', 'nama_tipe')->ignore($tipe->id_tipe),
            'nama_tipe' => 'required|max:4',
            'keterangan_tipe' => 'required|max:50',
        ]);

        $tipe->update([
            'nama_tipe' => request('nama_tipe'),
            'keterangan_tipe' => request('keterangan_tipe')
        ]);

        return redirect()->route('tipe.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Tipe $tipe)
    {
        $tipe->delete();

        return redirect()->route('tipe.index')->with('success', 'Data berhasil dihapus');
    }


}
