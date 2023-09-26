<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nama_barang'=>$this->faker->colorName(),
            'harga'=>$this->faker->numberBetween(1000, 100000),
            'stok'=>$this->faker->numberBetween(1-100)
        ];
    }
}
