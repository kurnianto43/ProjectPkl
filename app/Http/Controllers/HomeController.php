<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kulkas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kulkascount = Kulkas::count();
        return view('beranda.index', compact('kulkascount'));
    }
}
