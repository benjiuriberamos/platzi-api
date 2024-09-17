<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'email' => 'benjiuriberamos@gmail.com',
            'password' => Hash::make('test')
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(120)->create();
    }
}
