<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UpdateGambarBarang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_daftar_barang')->update(['gambar'=>'pasmina.jpg']); // update
    }
}
