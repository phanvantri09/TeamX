<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'type'=>111,
                'balance'=>0,
                'numberPhone'=>'0367243555',
                'ref'=>'@@@',
                'name' =>Str::random(11),
                'email' => Str::random(11).'@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            DB::table('users')->insert([
                'type'=>222,
                'balance'=>0,
                'numberPhone'=>'0367243555',
                'ref'=>'@@@',
                'name' =>Str::random(11),
                'email' => Str::random(11).'@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
        }


    }
}
