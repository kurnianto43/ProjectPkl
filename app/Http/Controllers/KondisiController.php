<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kondisi;
use Illuminate\Validation\Rule;

class KondisiController extends Controller
{
    public function index()
    {
        $kondisis = Kondisi::all();
        return view('kondisi.index', compact('kondisis'));
    }

    public function create()
    {
        return view('kondisi.tambah');
    }

    public function store()
    {
         $this->validate(request(), [
            'nama_kondisi' => 'required|unique:kondisis|max:20',
            'keterangan_kondisi' => 'required|max:50',
        ]);

        Kondisi::create([
            'nama_kondisi' => request('nama_kondisi'),
            'keterangan_kondisi' => request('keterangan_kondisi')
        ]);

        return redirect()->route('kondisi.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Kondisi $kondisi)
    {
        return view('kondisi.edit', compact('kondisi'));
    }

    public function update(Kondisi $kondisi)
    {
        $this->validate(request(), [
            'nama_kondisi' => Rule::unique('kondisis', 'nama_kondisi')->ignore($kondisi->id_kondisi),
            'nama_kondisi' => 'required|max:20',
            'keterangan_kondisi' => 'required|max:50',
        ]);

        $kondisi->update([
            'nama_kondisi' => request('nama_kondisi'),
            'keterangan_kondisi' => request('keterangan_kondisi')
        ]);

        return redirect()->route('kondisi.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Kondisi $kondisi)
    {
        $kondisi->delete();

        return redirect()->route('kondisi.index')->with('success', 'Data berhasil dihapus');
    }
}
