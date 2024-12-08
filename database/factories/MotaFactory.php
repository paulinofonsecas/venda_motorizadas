<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mota>
 */
class MotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \faker\factory::create();

        return [
            'nome' => $faker->name,
            'preco' => $faker->randomNumber(2),
            'descricao' => $faker->text,
            'disponivel' => $faker->boolean,
            'imagem_url' => $faker->imageUrl,
        ];
    }
}
