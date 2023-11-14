<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'type'=>111,
            'balance'=>0,
            'numberPhone'=>'0367243555',
            'ref'=>'@@@',
            'name' =>'admin',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('abcd1234'),
        ]);
    }
}