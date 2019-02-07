<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sukucadang;
use App\KategoriSukucadang;
use Illuminate\Validation\Rule;
use PDF;
use Carbon\Carbon;

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
         $this->validate(request(), [
            'nomor_sukucadang' => 'required|unique:sukucadangs|max:5',
            'nama_sukucadang' => 'required|max:50',
            'id_kategori_sukucadang' => 'required',
            'stok' => 'required',
        ]); 

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
         $this->validate(request(), [
            'nomor_sukucadang' => Rule::unique('sukucadang', 'nomor_sukucadang')->ignore($sukucadang->id_sukucadang),
            'nomor_sukucadang' => 'required|max:5',
            'nama_sukucadang' => 'required|max:50',
            'id_kategori_sukucadang' => 'required',
            'stok' => 'required',
        ]); 

        $sukucadang->update([
            'nomor_sukucadang' => request('nomor_sukucadang'),
            'nama_sukucadang' => request('nama_sukucadang'),
            'id_kategori_sukucadang' => request('id_kategori_sukucadang'),
            'stok' => request('stok')
        ]);

        return redirect()->route('sukucadang.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Sukucadang $sukucadang)
    {
        $sukucadang->delete();

        return redirect()->route('sukucadang.index')->with('success', 'Data berhasil dihapus');
    }

    public function laporan()
    {
        $tgl = Carbon::now()->format('d F Y');
        $sukucadangs = sukucadang::all();
        $pdf = PDF::loadView('sukucadang.cetaklaporan', compact('sukucadangs', 'tgl'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->download('data-suku-cadang.pdf', compact('sukucadangs', 'tgl'));
    }
}
