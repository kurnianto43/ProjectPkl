<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipe;

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
        Tipe::create([
            'nama_tipe' => request('nama_tipe'),
            'keterangan' => request('keterangan')
        ]);

        return redirect()->route('tipe.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Tipe $tipe)
    {
        return view('tipe.edit', compact('tipe'));
    }

    public function update(Tipe $tipe)
    {
        $tipe->update([
            'nama_tipe' => request('nama_tipe'),
            'keterangan' => request('keterangan')
        ]);

        return redirect()->route('tipe.index')->with('warning', 'Data berhasil diubah');
    }

    public function destroy(Tipe $tipe)
    {
        $tipe->delete();

        return redirect()->route('tipe.index')->with('danger', 'Data berhasil dihapus');
    }


}
