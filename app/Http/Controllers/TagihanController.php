<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tagihan;

class TagihanController extends Controller
{
    public function index()
    {
        return view('tagihan.index');
    }

    public function create()
    {
        return view('tagihan.tambah');
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
