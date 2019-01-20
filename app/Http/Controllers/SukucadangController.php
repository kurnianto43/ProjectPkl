<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sukucadang;
use App\KategoriSukucadang;

class SukucadangController extends Controller
{
    public function index()
    {
        $sukucadangs = Sukucadang::all();
        return view('sukucadang.index', compact('sukucadangs'));
    }

    public function create()
    {
        $kategorisukucadangs = KategoriSukucadang::all();
        return view('sukucadang.tambah', compact('kategorisukucadangs'));
    }

    public function store()
    {
        Sukucadang::create([
            'nomor_sukucadang' => request('nomor_sukucadang'),
            'nama_sukucadang' => request('nama_sukucadang'),
            'id_kategori_sukucadang' => request('id_kategori_sukucadang'),
            'stok' => request('stok')
        ]);

        return redirect()->route('sukucadang.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Sukucadang $sukucadang)
    {
        $kategorisukucadangs = KategoriSukucadang::all();
        return view('sukucadang.edit', compact('sukucadang', 'kategorisukucadangs'));
    }

    public function update(Sukucadang $sukucadang)
    {
        $sukucadang->update([
            'nomor_sukucadang' => request('nomor_sukucadang'),
            'nama_sukucadang' => request('nama_sukucadang'),
            'id_kategori_sukucadang' => request('id_kategori_sukucadang'),
            'stok' => request('stok')
        ]);

        return redirect()->route('sukucadang.index')->with('warning', 'Data berhasil diubah');
    }

    public function destroy(Sukucadang $sukucadang)
    {
        $sukucadang->delete();

        return redirect()->route('sukucadang.index')->with('danger', 'Data berhasil dihapus');
    }
}
