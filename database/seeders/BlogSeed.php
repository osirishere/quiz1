<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BlogSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_blog')->insert( // insert / data baru
            [
            'gambar'=>'img/img-01.jpg',
            'judul'=>'Simple and useful HTML layout',
            'isi'=>'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.',
            'tanggal'=>'2020-06-24',
            'pembuat'=>'by Raihan Osiris'
            ]
        );
    }
}
