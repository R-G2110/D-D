<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;
use App\Models\Race;
use Faker\Generator as Faker;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){
            $race = new Race();
            $race->name = $faker->word();
            $race->description = $faker->paragraph();
            $race->mod_for = $faker->numberBetween(-3, 3);
            $race->mod_des = $faker->numberBetween(-3, 3);
            $race->mod_cos = $faker->numberBetween(-3, 3);
            $race->mod_int = $faker->numberBetween(-3, 3);
            $race->mod_sag = $faker->numberBetween(-3, 3);
            $race->mod_car = $faker->numberBetween(-3, 3);
            $race->slug = Helper::generateSlug($race->name, Race::class);
            $race->save();
    }
}
}
