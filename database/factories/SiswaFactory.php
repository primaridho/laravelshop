<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * 
     * @return array
     */
    protected $model = Siswa::class;

    public function definition()
    {
        return [
            'nis' => $this->faker->numerify('##########'),
            'nama' => $this->faker->name
        ];
    }

    
}
