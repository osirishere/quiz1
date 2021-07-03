<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_supplier'=>'AN Hijab',
                'alamat_supplier'=>'Perum Cempaka Putih II',
                'jenis'=>'fashion',
                'no_hp_supplier'=>'0895630369132'
        ];
    }
}
