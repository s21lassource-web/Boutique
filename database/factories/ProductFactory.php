<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     * protected $fillable = [
        'name',
        'description',
        'photo',
        'price',
        'discount',
        'stock_quantity',
        'new',
        'category_id',
    ];
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'photo' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'discount' => $this->faker->numberBetween( 0, 50),
            'stock_quantity' => $this->faker->numberBetween(0, 100),
            'new' => $this->faker->boolean(),                       
            'category_id' => $this->faker->numberBetween(1, 8),
            //
        ];
    }
}
