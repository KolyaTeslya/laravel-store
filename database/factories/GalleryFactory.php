<?php

namespace Database\Factories;

use App\Models\Gallery;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */

//$factory->define(Gallery::class, function (Faker $faker){
//    $photos = [
//        '0' => 'https://loremflickr.com/640/480/computer',
//        '1' => 'https://loremflickr.com/640/480/computer',
//        '2' => 'https://loremflickr.com/640/480/computer',
//        '3' => 'https://loremflickr.com/640/480/computer'
//    ];
//
//    return [
//       'product_id' => null,
//        'photos' => serialize($photos)
//    ];
//
//});
class GalleryFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

            $photos = [
                '0' => 'https://loremflickr.com/640/480/computer',
                '1' => 'https://loremflickr.com/640/480/computer',
                '2' => 'https://loremflickr.com/640/480/computer',
                '3' => 'https://loremflickr.com/640/480/computer'
            ];

        return [
            'product_id' => null,
            'photos' => serialize($photos)
        ];
    }
}
