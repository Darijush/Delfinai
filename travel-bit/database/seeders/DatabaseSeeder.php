<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as F;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();
        $faker = F::create('en_EN');
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@test.mail',
            'password' => Hash::make('123'),
            'created_at' => $time->addSeconds(1),
            'updated_at' => $time,
            'role'=> 1
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@test.mail',
            'password' => Hash::make('123'),
            'created_at' => $time->addSeconds(1),
            'updated_at' => $time,
            'role' => 10
        ]);

        foreach(['summer', 'winter', 'whole year', 'spring', 'autumn'] as $season){
            DB::table('seasons')->insert([
                'title' => $season,
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time
            ]);
        }
        foreach (range(1,16) as $_){
            DB::table('countries')->insert([
                'season_id' => rand(1,5),
                'title' => $faker->country(),
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time
            ]);
        }
        foreach (range(1,41) as $_){
            DB::table('hotels')->insert([
                'country_id' => rand(1,16),
                'title' => $faker->company(),
                'term' => rand(5,14),
                'price' => rand(10000,500000)/100,
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time
            ]);
        }
    }
}
