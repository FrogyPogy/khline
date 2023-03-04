<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2,4)),
            'slug' => $this->faker->slug(),
            'penanya' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'kategori' => $this->faker->sentence(1),
            'kode_provinsi' => $this->faker->numberBetween(0,99),
            'pertanyaan' => $this->faker->paragraph(4)
        ];
    }
}
