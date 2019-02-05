<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tagihan;
use App\Perbaikan;
use Illuminate\Support\Facades\DB;

class TagihanController extends Controller
{
    public function index()
    {
        $tagihans = Tagihan::all();
        return view('tagihan.index', compact('tagihans', 'data'));
    }

    public function detail(Tagihan $tagihan)
    {
        $data = DB::table('perbaikans')
                ->where('id_tagihan', $tagihan->id_tagihan)
                ->sum('biaya_perbaikan');


        return view('tagihan.detail', compact('data', 'tagihan'));
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

    public function destroy()
    {

    }
}
