<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DaftarPelangganSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_daftar_pelanggan')->insert(
            [
            'nama_pelanggan'=>'Raihan Osiris',
            'jenis_kelamin'=>'laki',
            'no_hp'=>'089123467892',
            'alamat'=>'Perum Cempaka Putih II'
            ]
        );
    }
}
