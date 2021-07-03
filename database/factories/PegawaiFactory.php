<?php

namespace Database\Factories;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pegawai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pegawai'=>'Naily Ikmalul Insiyah',
            'jabatan'=>'staf',
            'no_hp_pegawai'=>'081234567911',
            'alamat_pegawai'=>'Jl. Ketimang Tengah no.32 kab. Pasuruan'
        ];
    }
}
