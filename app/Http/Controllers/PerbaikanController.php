<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perbaikan;
use App\Teknisi;
use App\Kulkas;
use App\TipePekerjaan;
use App\JenisMasalah;
use App\Sukucadang;
use Illuminate\Support\Facades\DB;
use App\Tagihan;
use Carbon\Carbon;

class PerbaikanController extends Controller
{
    public function create()
    {
        $sukucadangs = Sukucadang::all();
        $teknisis = Teknisi::all();
        $kulkas = Kulkas::all();
        $tipepekerjaans = TipePekerjaan::all();
        $jenis_masalahs = JenisMasalah::all();
        $tagihans = Tagihan::all();
        return view('perbaikan.tambah', compact('teknisis', 'kulkas', 'tipepekerjaans', 'jenis_masalahs', 'sukucadangs', 'tagihans'));
    }


    public function store(Request $request)
    {
        $this->validate(request(), [
            'nomor_dokumen_perbaikan' => 'required|unique:perbaikans|max:24',
            'id_tagihan' => 'required',
            'id_teknisi' => 'required',
            'id_kulkas' => 'required|unique:perbaikans',
            'id_jenis_masalah' => 'required',
            'id_tipe_pekerjaan' => 'required',
            'id_sukucadang' => 'required',
            'jumlah_sukucadang' => 'required',
            'tanggal_perbaikan' => 'required',
            'biaya_perbaikan' => 'required',
        ]);

        $data = ([
                'nomor_dokumen_perbaikan' => request('nomor_dokumen_perbaikan'),
                'id_tagihan' => request('id_tagihan'),
                'id_teknisi' => request('id_teknisi'),
                'id_kulkas' => request('id_kulkas'),
                'id_jenis_masalah' => request('id_jenis_masalah'),
                'id_tipe_pekerjaan' => request('id_tipe_pekerjaan'),
                'id_sukucadang' => request('id_sukucadang'),
                'jumlah_sukucadang' => request('jumlah_sukucadang'),
                'tanggal_perbaikan' => request('tanggal_perbaikan'),
                'biaya_perbaikan' => request('biaya_perbaikan')
        ]);

        Perbaikan::create($data);

        $sukucadang = Sukucadang::findOrFail($request->id_sukucadang);
        $sukucadang->stok -= $request->jumlah_sukucadang;
        $sukucadang->save();

        return redirect()->route('perbaikan.index')->with('success', 'data berhasil disimpan');

    }


    public function index()
    {
        $perbaikans = Perbaikan::all();
        return view('perbaikan.index', compact('perbaikans'));
    }

    public function  details(Perbaikan $perbaikan)
    {
        return view('perbaikan.detail', compact('perbaikan'));
    }

    public function edit(Perbaikan $perbaikan)
    {
        $sukucadangs = Sukucadang::all();
        $teknisis = Teknisi::all();
        $kulkas = Kulkas::all();
        $tipepekerjaans = TipePekerjaan::all();
        $jenis_masalahs = JenisMasalah::all();

        return view('perbaikan.edit', compact('perbaikan', 'sukucadangs', 'teknisis', 'kulkas', 'tipepekerjaans', 'jenis_masalahs'));
    }

    public function update(Request $request, Perbaikan $perbaikan)
    {

        $this->validate(request(), [
            'nomor_dokumen_perbaikan' => Rule::unique('perbaikan', 'nomor_dokumen_perbaikan')->ignore($perbaikan->id_perbaikan),
            'nomor_dokumen_perbaikan' => 'required|max:24',
            'id_tagihan' => 'required',
            'id_teknisi' => 'required',
            'id_kulkas' => 'required|unique:perbaikans',
            'id_jenis_masalah' => 'required',
            'id_tipe_pekerjaan' => 'required',
            'id_sukucadang' => 'required',
            'jumlah_sukucadang' => 'required',
            'tanggal_perbaikan' => 'required',
            'biaya_perbaikan' => 'required',
        ]);

        $data = ([
                'nomor_dokumen_perbaikan' => request('nomor_dokumen_perbaikan'),
                'id_teknisi' => request('id_teknisi'),
                'id_kulkas' => request('id_kulkas'),
                'id_jenis_masalah' => request('id_jenis_masalah'),
                'id_tipe_pekerjaan' => request('id_tipe_pekerjaan'),
                'id_sukucadang' => request('id_sukucadang'),
                'jumlah_sukucadang' => request('jumlah_sukucadang'),
                'tanggal_perbaikan' => request('tanggal_perbaikan')
        ]);

        $perbaikan->update($data);
        return redirect()->route('perbaikan.index')->with('success', 'Data telah diubah');
    }

    public function destroy(Perbaikan $perbaikan)
    {
        $perbaikan->delete();

        return redirect()->route('perbaikan.index')->with('success', 'Data berhasil dihapus');
    }
}
