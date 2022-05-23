<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@cobraitech.com',
        //     'password' => Hash::make('admin123'),
        //     'is_admin' => true
        // ]);

        $faker = Faker::create();
        foreach (range(1, 200) as $index) {
            DB::table('queries')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'message' => Str::random(100),
                'status' => 'Pending'
            ]);
        }
    }
}
