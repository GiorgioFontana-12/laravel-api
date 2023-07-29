<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $project = new Project();
            $project->name = $faker->sentence(3);
            $project->content = $faker-> text(500);
            $project->image = $faker->imageUrl(640, 480, 'animals', true);
            $project->save();
        }
    }
}
