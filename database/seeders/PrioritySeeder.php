<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('priorities')->insert([
            'name' => 'Easy',
            'color' => '#468349',
            'icon' => 'fa-solid fa-check',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('priorities')->insert([
            'name' => 'Medium',
            'color' => '#f0d000',
            'icon' => 'fa-solid fa-exclamation',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('priorities')->insert([
            'name' => 'Hard',
            'color' => '#cc0000',
            'icon' => 'fa-solid fa-times',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
