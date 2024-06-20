<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory(1)->create([
            'name' => 'Pororo',
            'email' => 'pororo@gmail.com',
            'level' => 2,
        ]);
    }
}
