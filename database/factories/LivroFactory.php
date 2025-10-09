<?php

namespace Database\Factories;

use App\Models\Livro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livro>
 */
class LivroFactory extends Factory {

    protected $model = Livro::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'titulo' => fake()->words(3, true),
            'autor' => fake()->name(),
            'isbn' => fake()->randomNumber(5,true),
            'editora' => fake()->company(),
            'ano_publicacao' => fake()->dateTimeThisCentury()
        ];
    }
}
