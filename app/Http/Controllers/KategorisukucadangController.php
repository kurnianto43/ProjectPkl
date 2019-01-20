<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriSukucadang;

class KategorisukucadangController extends Controller
{
    public function index()
    {
        $kategorisukucadangs = KategoriSukucadang::all();
        return view('kategori_sukucadang.index', compact('kategorisukucadangs'));
    }

    public function create()
    {
        return view('kategori_sukucadang.tambah');
    }

    public function store()
    {
        KategoriSukucadang::create([
            'nama_kategori' => request('nama_kategori'),
            'keterangan' => request('keterangan')
        ]);

        return redirect()->route('kategorisukucadang.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(KategoriSukucadang $kategorisukucadang)
    {
        return view('kategori_sukucadang.edit', compact('kategorisukucadang'));
    }

    public function update(KategoriSukucadang $kategorisukucadang)
    {
        $kategorisukucadang->update([
            'nama_kategori' => request('nama_kategori'),
            'keterangan' => request('keterangan')
        ]);

        return redirect()->route('kategorisukucadang.index')->with('warning', 'Data berhasil diubah');
    }

    public function destroy(KategoriSukucadang $kategorisukucadang)
    {
        $kategorisukucadang->delete();

        return redirect()->route('kategorisukucadang.index')->with('danger', 'Data berhasil dihapus');
    }
}
