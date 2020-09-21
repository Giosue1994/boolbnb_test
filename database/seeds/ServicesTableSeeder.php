<?php

use Illuminate\Database\Seeder;

use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 5 ; $i++) {
        $new_service = new Service();
        $new_service->wifi = rand(0, 1);
        $new_service->parking = rand(0, 1);
        $new_service->pets_allowed = rand(0, 1);
        $new_service->air_conditioning = rand(0, 1);
        $new_service->swimming_pool = rand(0, 1);
        $new_service->washingmachine = rand(0, 1);
        $new_service->tv= rand(0, 1);
        $new_service->kitchen = rand(0, 1);
        $new_service->breakfast = rand(0, 1);
        $new_service->save();
      }
    }
}
