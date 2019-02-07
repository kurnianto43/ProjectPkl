<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teknisi;
use App\Karyawan;
use Illuminate\Validation\Rule;
use PDF;

class TeknisiController extends Controller
{
     public function index()
    {
        $teknisis = Teknisi::all();
        return view('teknisi.index', compact('teknisis'));
    }

    public function create()
    {
        return view('teknisi.tambah');
    }

    public function store()
    {
        $this->validate(request(), [
            'kode_teknisi' => 'required|unique:teknisis|max:4',
            'nama_teknisi' => 'required|max:25',
            'alamat_teknisi' => 'required|max:90',
            'nomor_hp' => 'required|max:13',
        ]); 

        Teknisi::create([
            'kode_teknisi' => request('kode_teknisi'),
            'nama_teknisi' => request('nama_teknisi'),
            'alamat_teknisi' => request('alamat_teknisi'),
            'nomor_hp' => request('nomor_hp')
        ]);

        return redirect()->route('teknisi.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Teknisi $teknisi)
    {
        return view('teknisi.edit', compact('teknisi'));
    }

    public function update(Teknisi $teknisi)
    {
       $this->validate(request(), [
            'kode_teknisi' => Rule::unique('teknisi', 'kode_teknisi')->ignore($teknisi->id_teknisi),
            'kode_teknisi' => 'required|max:4',
            'nama_teknisi' => 'required|max:25',
            'alamat_teknisi' => 'required|max:90',
            'nomor_hp' => 'required|max:13',
        ]); 


        $teknisi->update([
            'kode_teknisi' => request('kode_teknisi'),
            'nama_teknisi' => request('nama_teknisi'),
            'alamat_teknisi' => request('alamat_teknisi'),
            'nomor_hp' => request('nomor_hp')
        ]);

        return redirect()->route('teknisi.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Teknisi $teknisi)
    {
        $teknisi->delete();

        return redirect()->route('teknisi.index')->with('success', 'Data berhasil dihapus');
    }


    public function laporan()
    {
        $teknisis = Teknisi::all();
        $pdf = PDF::loadView('teknisi.cetaklaporan', compact('teknisis'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->download('data-teknisi.pdf', compact('teknisis'));
    }
}
