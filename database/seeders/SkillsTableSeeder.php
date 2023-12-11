<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;
use Faker\Generator as Faker;
use App\Functions\Helper;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<30; $i++){
            $skill = new Skill();
            $skill->name = $faker->word(30);
            $skill->description = $faker->paragraph();
            $skill->characteristic = $faker->word(30);
            $skill->slug = Helper::generateSlug($skill->name, Skill::class);

            $skill->save();
        }
    }
}
