<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['FrontEnd', 'BackEnd', 'FullStack', 'Design', 'DevOps'];

        foreach ($types as $type_name) {

            $new_type = new Type();
            $new_type->name = $type_name;
            $new_type->slug = Str::slug($type_name);

            $new_type->save();
        }
    }
}
