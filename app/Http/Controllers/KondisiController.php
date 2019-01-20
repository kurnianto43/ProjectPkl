<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kondisi;

class KondisiController extends Controller
{
    public function index()
    {
        $kondisis = Kondisi::all();
        return view('kondisi.index', compact('kondisi'));
    }

    public function create()
    {
        return view('kondisi.tambah');
    }

    public function store()
    {
        Kondisi::create([
            'nama_kondisi' => request('nama_kondisi'),
            'keterangan' => request('keterangan')
        ]);

        return redirect()->route('kondisi.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Kondisi $kondisi)
    {
        return view('kondisi.edit', compact('kondisi'));
    }

    public function update(Kondisi $kondisi)
    {
        $kondisi->update([
            'nama_kondisi' => request('nama_kondisi'),
            'keterangan' => request('keterangan')
        ]);

        return redirect()->route('kondisi.index')->with('warning', 'Data berhasil diubah');
    }

    public function destroy(Kondisi $kondisi)
    {
        $kondisi->delete();

        return redirect()->route('kondisi.index')->with('danger', 'Data berhasil dihapus');
    }
}
