<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kulkas;
use App\Tipe;
use App\Kondisi;
use Illuminate\Validation\Rule;
use PDF;
use Carbon\Carbon;

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
        $this->validate(request(), [
            'nomor_asset' => 'required|unique:kulkas|max:7',
            'nomor_seri' => 'required|unique:kulkas|max:50',
            'tanggal_masuk' => 'required',
            'id_tipe' => 'required',
            'id_kondisi' => 'required',
        ]); 
       

        Kulkas::create([
            'nomor_asset' => request('nomor_asset'),
            'nomor_seri' => request('nomor_seri'),
            'tanggal_masuk' => request('tanggal_masuk'),
            'id_tipe' => request('id_tipe'),
            'id_kondisi' => request('id_kondisi')
        ]);

        return redirect()->route('kulkas.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Request $request, Kulkas $kulkas)
    {
        $tipes = Tipe::all();
        $kondisis = Kondisi::all();
        return view('kulkas.edit', compact('kulkas', 'tipes', 'kondisis'));
    }

    public function update(Kulkas $kulkas)
    {
        $this->validate(request(), [
            'nomor_asset' => Rule::unique('kulkas', 'nomor_asset')->ignore($kulkas->id_kulkas),
            'nomor_asset' => 'required|max:7',
            'nomor_seri' => Rule::unique('kulkas', 'nomor_seri')->ignore($kulkas->id_kulkas),
            'nomor_seri' => 'required|max:50',
            'tanggal_masuk' => 'required',
            'id_tipe' => 'required',
            'id_kondisi' => 'required',
        ]); 

        $kulkas->update([
            'nomor_asset' => request('nomor_asset'),
            'nomor_seri' => request('nomor_seri'),
            'tanggal_masuk' => request('tanggal_masuk'),
            'id_tipe' => request('id_tipe'),
            'id_kondisi' => request('id_kondisi')
        ]);

        return redirect()->route('kulkas.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Kulkas $kulkas)
    {
        $kulkas->delete();

        return redirect()->route('kulkas.index')->with('success', 'Data berhasil dihapus');
    }

    public function laporan()
    {
        $tgl = Carbon::now()->format('d F Y');
        $kulkas = Kulkas::all();
        $pdf = PDF::loadView('kulkas.cetaklaporan', compact('kulkas', 'tgl'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->download('kulkas-instore.pdf', compact('kulkas', 'tgl'));
    }

}
