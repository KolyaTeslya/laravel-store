<?php

namespace Database\Seeders;
use Faker\Factory;
use App\Models\Product;
use Faker\Generator;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(Product::class, 120)->create();
        Product::factory()->count(120)->create();

//        $faker = Faker\Factory::create();

        $faker = Factory::create();

        Product::all()->each(function ($product) use ($faker){
//           $product->slug = str_slug($product->title, '-');
            $product->slug = Str::of($product->title)->slug('-');
            $product->save();

            $categories = [];

            for ($i=0; $i<4; $i++){
                array_push($categories, $faker->numberBetween(1,5));
            }

            $product->categories()->sync($categories);
        });

    }
}
