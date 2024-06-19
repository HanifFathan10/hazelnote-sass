<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'hanif fathan',
            'email' => 'haniffathan33@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);

        User::factory(4)->create();
    }
}
