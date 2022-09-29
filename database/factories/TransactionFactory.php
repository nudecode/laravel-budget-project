<?php

namespace Database\Factories;

use App\Models\Budget;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'budget_id' => Budget::all()->random()->id,
            'name' => $this->faker->company(),
            'due_at'=> $this->faker->dateTimeBetween('+1 days', '+7 days'),
            'amount' => $this->faker->numberBetween($min = 0, $max = 20000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
