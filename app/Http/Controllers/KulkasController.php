<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kulkas;
use App\Tipe;
use App\Kondisi;

class KulkasController extends Controller
{

    public function index()
    {
        $kulkas = Kulkas::all();
        return view('kulkas.index', compact('kulkas'));
    }

    public function create()
    {
        $tipes = Tipe::all();
        $kondisis = Kondisi::all();
        return view('kulkas.tambah', compact('tipes', 'kondisis'));
    }

    public function store()
    {
        kulkas::create([
            'nomor_asset' => request('nomor_asset'),
            'nomor_seri' => request('nomor_seri'),
            'id_tipe' => request('id_tipe'),
            'id_kondisi' => request('id_kondisi')
        ]);

        return redirect()->route('kulkas.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Kulkas $kulkas)
    {
        $tipes = Tipe::all();
        $kondisis = Kondisi::all();
        return view('kulkas.edit', compact('kulkas', 'tipes', 'kondisis'));
    }

    public function update(Kulkas $kulkas)
    {
        $kulkas->update([
            'nomor_asset' => request('nomor_asset'),
            'nomor_seri' => request('nomor_seri'),
            'id_tipe' => request('id_tipe'),
            'id_kondisi' => request('id_kondisi')
        ]);

        return redirect()->route('kulkas.index')->with('warning', 'Data berhasil diubah');
    }

    public function destroy(Kulkas $kulkas)
    {
        $kulkas->delete();

        return redirect()->route('kulkas.index')->with('danger', 'Data berhasil dihapus');
    }


}
