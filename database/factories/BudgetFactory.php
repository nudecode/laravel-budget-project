<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Budget;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Budget::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'period' => $this->faker->dateTimeBetween('-52 week', '+1 week'),
            'period_start' => $this->faker->dateTimeBetween('+1 days', '+7 days'),
            'period_end' => $this->faker->dateTimeBetween('+1 days', '+14 days'),
            'is_active' => $this->faker->numberBetween($min = 0, $max = 1),
            'user_id' => User::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
