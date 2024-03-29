<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use App\Models\Type;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // associo type_id al project
        $types = Type::all();
        $ids = $types->pluck('id');

        for ($i = 0; $i < 10; $i++) {
            $new_project = new Project();
            $new_project->title = $faker->words(6, true);
            $new_project->description = $faker->paragraph(6);
            $new_project->image = 'https://picsum.photos/id/' . $faker->randomDigit() . '/200/300';
            $new_project->url = $faker->url();
            $new_project->start_date = $faker->date();
            $new_project->end_date = $faker->date();
            $new_project->type_id = $faker->optional()->randomElement($ids);

            $new_project->save();
        }
    }
}
