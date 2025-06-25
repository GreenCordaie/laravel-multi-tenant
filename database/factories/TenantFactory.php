<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tenant>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Génère un nom d'entreprise aléatoire comme "Stark Industries Inc"
            'name' => fake()->company(),

            // Génère un email aléatoire et s'assure qu'il est unique dans la table
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}