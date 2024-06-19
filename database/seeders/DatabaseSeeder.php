<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use App\Models\Priority;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\NoteSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Call all seeders
        $this->call([
            PrioritySeeder::class,
            UserSeeder::class,
            NoteSeeder::class,
        ]);

        Note::factory(50)
            ->recycle([
                Priority::all(),
                User::all(),
            ])
            ->create();
    }
}
