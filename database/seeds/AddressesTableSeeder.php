<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Address;


class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
          $new_address = new Address();
          $new_address->longitude = json_encode($faker->longitude);
          $new_address->latitude = json_encode($faker->latitude);
          $new_address->name = $faker->streetName;
          $new_address->apartment_id = rand(1, 5);
          $new_address->save();
        }
    }
}
