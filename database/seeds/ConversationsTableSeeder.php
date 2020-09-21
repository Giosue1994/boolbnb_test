<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Conversation;


class ConversationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 2; $i++) {
          $new_conversation = new Conversation();
          $new_conversation->message = $faker->sentence(50);
          $new_conversation->user_id = rand(1,5);
          $new_conversation->save();
        }
    }
}
