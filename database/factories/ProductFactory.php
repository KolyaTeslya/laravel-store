<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
//
//$factory->define(Product::class, function (Faker $faker){
//    return [
//      'title' => $faker->numerify('Product ###'),
//      'description' => $faker->paragraphs(4,true),
//      'price' => $faker->randomFloat(2, 10,999),
//      'barcode' => $faker->ean8,
//      'stock' => $faker->numberBetween(0,999),
//      'cover' => 'https://loremflickr.com/640/480/computer'
//    ];
//});

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->numerify('Product ###'),
            'description' => $this->faker->paragraphs(4,true),
            'price' => $this->faker->randomFloat(2, 10,999),
            'barcode' => $this->faker->ean8,
            'stock' => $this->faker->numberBetween(0,999),
            'cover' => 'https://loremflickr.com/640/480/computer'
        ];
    }
}
