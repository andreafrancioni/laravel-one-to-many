<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $projects = [
            [
                'type_id' => '1',
                'title' => 'progetto1test',
                'description' => 'progetto1test',
                'thumb' => 'progetto1test',
                'creation_date' => '2024/01/01',
                'type' => 'progetto1test',
            ],
            [
                'type_id' => '2',
                'title' => 'progetto2test',
                'description' => 'progetto2test',
                'thumb' => 'progetto2test',
                'creation_date' => '2024/01/01',
                'type' => 'progetto2test',
            ],
            [
                'type_id' => '3',
                'title' => 'progetto3test',
                'description' => 'progetto3test',
                'thumb' => 'progetto3test',
                'creation_date' => '2024/01/01',
                'type' => 'progetto3test',
            ],
        ];

        foreach ($projects as $project) {

            $newproject = new Project();
            $newproject->fill($project);
            $newproject->save();
        }
    }
}
