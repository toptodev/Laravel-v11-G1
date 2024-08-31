<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
      'code' => fake()->unique()->regexify('[A-Za-z0-9]{10}'),
      'title' => fake()->name(),
      'price_actual' => fake()->numberBetween(100, 1000),
      'price' => fake()->numberBetween(100, 1000),
      'types' => Str::random(5),
      'detail' => fake()->text(100),
      'sort' => 1,
      'cover' => fake()->unique()->imageUrl(),
      'images' => json_encode([
        fake()->unique()->imageUrl(),
        fake()->unique()->imageUrl(),
        fake()->unique()->imageUrl()
      ])
    ];
  }
}
