<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;
use Faker\Generator as Faker;
use Illuminate\Broadcasting\Channel;
use App\Functions\Helper;
use App\Models\Race;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $character = new Character();
            $character->race_id = Race::inRandomOrder()->first()->id;
            $character->name = $faker->name();
            $character->height = $faker->randomFloat(2, 1, 3);
            $character->weight = $faker->numberBetween(1, 1000);
            $character->background = $faker->words(3, true);
            $character->image = $faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg');
            $character->armor_class = $faker->numberBetween(1,20);
            $character->FOR = $faker->numberBetween(4, 20);
            $character->DES = $faker->numberBetween(4, 20);
            $character->COS = $faker->numberBetween(4, 20);
            $character->INT = $faker->numberBetween(4, 20);
            $character->SAG = $faker->numberBetween(4, 20);
            $character->CAR = $faker->numberBetween(4, 20);
            $character->slug = Helper::generateSlug($character->name, Character::class);

            $character->save();
        }

    }
}
