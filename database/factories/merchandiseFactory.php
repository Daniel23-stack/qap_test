<?php

namespace Database\Factories;

use App\Models\merchandise;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class merchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $merchandise_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($merchandise_name);
        return [
            'name' => $merchandise_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(10,500),
            'SKU' => 'DIGI'.$this->faker->unique()->numberBetween(100,500),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(100,200),
            'image' => 'digital_' . $this->faker->unique()->numberBetween(1,22). '.jpg',
            'category_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
