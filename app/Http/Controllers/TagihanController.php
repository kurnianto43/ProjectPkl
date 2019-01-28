<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tagihan;

class TagihanController extends Controller
{
    public function index()
    {
        $tagihans = Tagihan::all();
        return view('tagihan.index', compact('tagihans'));
    }

    public function create()
    {
        $tipes = Tipe::all();
        $kondisis = Kondisi::all();
        return view('tagihan.tambah', compact('tipes', 'kondisis'));
    }

    public function store()
    {
        $this->validate(request(), [
            'nomor_asset' => 'required|unique:tagihan|max:7',
            'nomor_seri' => 'required|max:50',
            'id_tipe' => 'required',
            'id_kondisi' => 'required',
        ]); 
       

        tagihan::create([
            'nomor_asset' => request('nomor_asset'),
            'nomor_seri' => request('nomor_seri'),
            'tanggal_masuk' => request('tanggal_masuk'),
            'id_tipe' => request('id_tipe'),
            'id_kondisi' => request('id_kondisi')
        ]);

        return redirect()->route('tagihan.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Request $request, tagihan $tagihan)
    {
        $tipes = Tipe::all();
        $kondisis = Kondisi::all();
        return view('tagihan.edit', compact('tagihan', 'tipes', 'kondisis'));
    }

    public function update(tagihan $tagihan)
    {
        $this->validate(request(), [
            'nomor_asset' => Rule::unique('tagihan', 'nomor_asset')->ignore($tagihan->id_kulkas),
            'nomor_asset' => 'required|max:7',
            'nomor_seri' => 'required|max:50',
            'id_tipe' => 'required',
            'id_kondisi' => 'required',
        ]); 

        $tagihan->update([
            'nomor_asset' => request('nomor_asset'),
            'nomor_seri' => request('nomor_seri'),
            'tanggal_masuk' => request('tanggal_masuk'),
            'id_tipe' => request('id_tipe'),
            'id_kondisi' => request('id_kondisi')
        ]);

        return redirect()->route('tagihan.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(tagihan $tagihan)
    {
        $tagihan->delete();

        return redirect()->route('tagihan.index')->with('success', 'Data berhasil dihapus');
    }
}
