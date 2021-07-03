<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Supplier;
use DB;
class DaftarBarang extends Model
{
    use HasFactory;
    protected $table='table_daftar_barang';

    public function dataBarang()
    {
        $data = DB::table('table_daftar_barang as tb')
        ->join('table_supplier as ts','ts.id','tb.id_supplier')
        ->paginate(10);
        return $data;
    }

}
