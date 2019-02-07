<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tagihan;
use App\Perbaikan;
use Illuminate\Support\Facades\DB;
use PDF;
use Carbon\Carbon;

class TagihanController extends Controller
{
    public function index()
    {
        $tagihans = Tagihan::all();
        return view('tagihan.index', compact('tagihans', 'data'));
    }

    public function laporan(Tagihan $tagihan)
    {

        $data = DB::table('perbaikans')
                ->where('id_tagihan', $tagihan->id_tagihan)
                ->sum('biaya_perbaikan');

        $item = DB::table('perbaikans')
                ->where('id_tagihan', $tagihan->id_tagihan)
                ->count('biaya_perbaikan');


        $tgl = Carbon::now()->format('d, F Y');
        $pdf = PDF::loadView('tagihan.cetaklaporan', compact('tagihan', 'data', 'item', 'tgl'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('tagihan.pdf', compact('tagihan', 'data', 'item', 'tgl'));
    }

    public function create()
    {
        return view('tagihan.tambah');
    }

    public function store()
    {
        Tagihan::create([
            'nomor_dokumen' => request('nomor_dokumen'),
            'periode_tagihan' => request('periode_tagihan')
        ]);

        return redirect()->route('tagihan.index');
    }

    public function edit(Tagihan $tagihan)
    {
        return view('tagihan.edit', compact('tagihan'));
    }

    public function update(Tagihan $tagihan)
    {
        $tagihan->update([
            'nomor_dokumen' => request('nomor_dokumen'),
            'periode_tagihan' => request('periode_tagihan')
        ]);

        return redirect()->route('tagihan.index')->with('success', 'Data telah diubah');
    }

}
