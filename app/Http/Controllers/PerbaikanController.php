<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perbaikan;
use App\Teknisi;
use App\Kulkas;
use App\TipePekerjaan;
use App\JenisMasalah;
use App\Sukucadang;

class PerbaikanController extends Controller
{
    public function create()
    {
        $teknisis = Teknisi::all();
        $kulkas = Kulkas::all();
        $tipepekerjaans = TipePekerjaan::all();
        $sukucadangs = Sukucadang::all();
        return view('perbaikan.tambah', compact('teknisis', 'kulkas', 'tipepekerjaans', 'jenismasalahs', 'sukucadangs'));
    }


    public function store(Request $request)
    {


        $data = ([
                'nomor_dokumen' => request('nomor_dokumen'),
                'id_teknisi' => request('id_teknisi'),
                'id_kulkas' => request('id_kulkas'),
                'id_tipe_pekerjaan' => request('id_tipe_pekerjaan'),
                'temuan_masalah' => request('temuan_masalah'),
                'id_sukucadang' => request('id_sukucadang'),
                'tanggal_perbaikan' => request('tanggal_perbaikan'),
                'jumlah_sukucadang' => request('jumlah_sukucadang')
        ]);


        Perbaikan::create($data);

        $sukucadang = Sukucadang::findOrFail($request->id_sukucadang);
        $sukucadang->stok -= $request->jumlah_sukucadang;
        $sukucadang->save();

        return redirect()->route('sukucadang.index');
    }
}
