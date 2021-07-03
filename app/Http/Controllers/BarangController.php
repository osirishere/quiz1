<?php

namespace App\Http\Controllers;
use App\Models\DaftarBarang;

use Illuminate\Http\Request;

class BarangController extends Controller
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

    //instansiasi model => query builder not elequent
    public function model()
    {
        $data = new DaftarBarang();
        return $data;
    }

    public function index()
    {
        $data = $this->model()->dataBarang();
        return view('daftarbarang',compact('data'));
    }
}