<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriSukucadang;
use Illuminate\Validation\Rule;

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
        $this->validate(request(), [
            'nama_kategori' => 'required|unique:kategori_sukucadangs|max:25',
            'keterangan_kategori' => 'required|max:50',
        ]);

        KategoriSukucadang::create([
            'nama_kategori' => request('nama_kategori'),
            'keterangan_kategori' => request('keterangan_kategori')
        ]);

        return redirect()->route('kategorisukucadang.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(KategoriSukucadang $kategorisukucadang)
    {
        return view('kategori_sukucadang.edit', compact('kategorisukucadang'));
    }

    public function update(KategoriSukucadang $kategorisukucadang)
    {
        $this->validate(request(), [
            'nama_kategori' => Rule::unique('kategori_sukucadangs', 'nama_kategori')->ignore($kategorisukucadang->id_kategori_sukucadang),
            'nama_kategori' => 'required|max:25',
            'keterangan_kategori' => 'required|max:50',
        ]);

        $kategorisukucadang->update([
            'nama_kategori' => request('nama_kategori'),
            'keterangan_kategori' => request('keterangan_kategori')
        ]);

        return redirect()->route('kategorisukucadang.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(KategoriSukucadang $kategorisukucadang)
    {
        $kategorisukucadang->delete();

        return redirect()->route('kategorisukucadang.index')->with('success', 'Data berhasil dihapus');
    }
}
