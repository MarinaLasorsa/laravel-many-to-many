<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;
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

        $types = Type::all(); //collection di types
        $types_ids = $types->pluck('id')->all(); //array di id dei types. (pluck() fa una collection ma all() la rende un array)

        $technologies_ids = Technology::all()->pluck('id')->all();

        for($i = 0; $i < 30; $i++) {
            
            $project = new Project();

            $title = $faker->sentence(5);

            $project->title = $title;
            $project->slug = Str::slug($title);
            $project->description = $faker->text(500);
            $project->url = $faker->url();
            $project->type_id = $faker->optional()->randomElement($types_ids);

            $project->save();

            //da fare dopo il salvataggio per abbinare gli ids dei projects a quelli delle technologies:
            //prende ids a caso in numero random dall'array
            $random_technologies_ids = $faker->randomElements($technologies_ids, null);
            //li abbina all'id del project
            $project->technologies()->attach($random_technologies_ids);
        }
    }
}
