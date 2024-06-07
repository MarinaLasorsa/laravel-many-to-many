<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $types = Type::all();
        $ids = $types->pluck('id')->all();

        for($i = 0; $i < 10; $i++) {
            
            $project = new Project();

            $title = $faker->sentence(5);

            $project->title = $title;
            $project->slug = Str::slug($title);
            $project->description = $faker->text(500);
            $project->url = $faker->url();
            $project->type_id = $faker->optional()->randomElement($ids);

            $project->save();

        }
    }
}
