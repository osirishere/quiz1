<?php

namespace Database\Factories;

use App\Models\DaftarPelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

class DaftarPelangganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DaftarPelanggan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pelanggan'=>'Luluk Mufida',
            'jenis_kelamin'=>'Perempuan',
            'no_hp'=>'085232818530',
            'alamat'=>'Jalan Kersikan Bangil Kab. Pasuruan'
        ];
    }
}
