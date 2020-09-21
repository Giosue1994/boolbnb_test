<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Payment;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
          $new_payment = new Payment();
          $new_payment->method = $faker->sentence(1);
          $new_payment->name = $faker->name;
          $new_payment->apartment_id = rand(1, 5);
          $new_payment->save();
        }
    }
}
