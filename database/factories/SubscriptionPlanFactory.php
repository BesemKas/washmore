<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubscriptionPlan>
 */
class SubscriptionPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'plan_price' => $this->faker->randomFloat(2, 1, 10000),
            'garage_slots' => $this->faker->numberBetween(1, 10),
            'shop_discount' => $this->faker->numberBetween(0,16), // Correct method name for percentage between 0 and 100
            'service_discount' => $this->faker->numberBetween(0,16), // Correct method name for percentage between 0 and 100
        ];
    }
}

