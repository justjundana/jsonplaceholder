<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hasher = app()->make('hash');
        $faker = Faker::create();
 
    	for($i = 0; $i <= 100; $i++){
    		User::insert([
                "avatar" => "https://ui-avatars.com/api/?name=$faker->name",
                "name" => $faker->name,
                "email" => $faker->email,
                "email_verified_at" => $faker->dateTime($max = 'now', $timezone = null),
                "password" => $hasher->make("password"),
                "street" => $faker->streetAddress,
                "city" => $faker->city,
                "country" => $faker->country,
                "postcode" => $faker->postcode,
                "phonenumber" => $faker->phoneNumber,
                "created_at" => $faker->dateTimeBetween('-1 year', '-10 days'),
                "updated_at" => \Carbon\Carbon::now()
    		]);
 
    	}
    }
}
