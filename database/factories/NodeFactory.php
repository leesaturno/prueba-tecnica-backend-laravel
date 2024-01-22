<?php

namespace Database\Factories;

use App\Models\Node;
use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Node>
 */
class NodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {

        $id = fake()->unique()->numberBetween(1, 10);
        $created_at = fake()->dateTimeBetween('-1 year', 'now');
        return [
            'id' => $id,
            'parent' => null,
            'created_at' => $created_at,
        ];
    }
}
