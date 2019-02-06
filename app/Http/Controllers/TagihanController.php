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
        $perbaikans = Perbaikan::all();
        return view('tagihan.tambah', compact('perbaikans'));
    }

    public function store()
    {

    }

    public function edit()
    {
        return view('tagihan.edit');
    }

    public function update()
    {

    }

    public function destroy(Tagihan $tagihan)
    {
        $tagihan->delete();

        return redirect()->route('tagihan.index');
    }
}
