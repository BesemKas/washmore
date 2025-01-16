<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->word(),
            'description'=> $this->faker->sentence(),
            'product_image'=> $this->faker->imageUrl(),
            'product_category_id'=> ProductCategory::inRandomOrder()->first()->id,
            'price'=> $this->faker->randomFloat(2, 1, 100),
            'SKU'=> $this->faker->uuid(),
            'quantity_in_stock'=> $this->faker->numberBetween(1, 100),

        ];
    }
}
