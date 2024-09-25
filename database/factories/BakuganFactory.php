<?php

namespace Database\Factories;

use Database\Factories\Concerns\BatchesFactoryCreation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bakugan>
 */
class BakuganFactory extends Factory
{
    use BatchesFactoryCreation;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
