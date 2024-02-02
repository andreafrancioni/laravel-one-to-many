<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Social',
                'description' => 'Sviluppo di una webapp come social network',
            ],
            [
                'name' => 'Dashboard',
                'description' => 'Sviluppo dashboard di gestione per aziende',
            ],
            [
                'name' => 'Web Site',
                'description' => 'Sviluppo web portfolio aziendale',
            ]
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
}
