<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Apartment;
class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
          $new_apartment = new Apartment();
          $new_apartment->title = $faker->word;
          $new_apartment->rooms = rand(1, 5);
          $new_apartment->baths = rand(1, 3);
          $new_apartment->beds = rand(1, 5);
          $new_apartment->mqs = rand(50, 200);
          $new_apartment->description = $faker->sentence;
          $new_apartment->guests = rand(1, 10);
          $new_apartment->user_id = rand(1, 5);
          $new_apartment->sponsor_id = rand(1, 3);
          $new_apartment->save();
          $new_apartment->services()->attach(rand(1, 5));

        }
    }
}
