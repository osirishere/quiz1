<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SupplierSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_supplier')->insert(
            [
                'nama_supplier'=>'AN Hijab',
                'alamat_supplier'=>'Perum Cempaka Putih II',
                'jenis'=>'fashion',
                'no_hp_supplier'=>'0891234567890'
            ]
            );
    }
}
