<?php

namespace Database\Factories;
use App\Models\Category;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */

//$factory->define(Category::class, function (Faker $faker){
//    return [
//        'name' => $faker->randomElement(['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'])
//    ];
//});

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'])
        ];
    }
}
