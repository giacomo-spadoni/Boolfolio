<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->sentence(2);
            $newProject->description = $faker->sentence(22);
            $newProject->img = "https://picsum.photos/id/" . rand(1, 250) . "/450/450";
            $newProject->type_id = $faker->numberBetween(1, 4);
            $newProject->save();

            $technologies = Technology::inRandomOrder()->take(rand(1, 7))->pluck('id');
            $newProject->technologies()->attach($technologies);
        }
    }
}
