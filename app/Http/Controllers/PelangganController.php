<?php

namespace App\Http\Controllers;
use App\Models\DaftarPelanggan;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DaftarPelanggan::paginate(10);
        return view('daftarpelanggan',compact('data'));
    }
}