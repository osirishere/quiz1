<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PegawaiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_pegawai')->insert(
            [
            'nama_pegawai'=>'Ilma Nayla',
            'jabatan'=>'staff',
            'no_hp_pegawai'=>'089267217474918',
            'alamat_pegawai'=>'Jl. Kerumahmu'
            ]
            );
    }
}
