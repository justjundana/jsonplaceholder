<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

    	for($i = 0; $i <= 100; $i++){
    		Gallery::insert([
                "user_id" => $faker->numberBetween($min = 1, $max = 101),
                "title" => $faker->sentence,
                "image" => $faker->image(public_path("/images"),400,300, null, false),
                "created_at" => $faker->dateTimeBetween('-1 year', '-10 days'),
                "updated_at" => \Carbon\Carbon::now()
    		]);
    	}
    }
}
