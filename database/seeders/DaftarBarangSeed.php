<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DaftarBarangSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_daftar_barang')->insert(
            [
            'id_supplier'=>'1',
            'nama_barang'=>'kerudung_pasmina',
            'stok'=>'150',
            'harga'=>'20000'
            ]
        );
    }
}
