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
        $faker = F::create('lt_LT');
        DB::table('users')->insert([
            'name' => 'bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123'),
            'created_at' => $time->addSeconds(1),
            'updated_at' => $time,
            'role'=> 1
        ]);
        DB::table('users')->insert([
            'name' => 'briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
            'created_at' => $time->addSeconds(1),
            'updated_at' => $time,
            'role' => 10
        ]);

        foreach(['Cobra', 'Jaguar', 'Sharks', 'Cats and Dogs', 'Coporob', 'Funny movie', 'Lara and Tombs', 'Jasa and Vue'] as $movie){
            DB::table('movies')->insert([
                'title' => $movie,
                'price' => rand(100,1000)/100,
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time
            ]);
        }
        foreach (range(1,22) as $_){
            DB::table('comments')->insert([
                'movie_id' => rand(1,8),
                'post' => $faker->paragraph(rand(1, 10)),
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time
            ]);
        }
        foreach(['fun', 'free', 'cheap', 'kids', '18+', 'culinary', 'musical', 'serial'] as $tag){
            DB::table('tags')->insert([
                'title' => $tag,
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time
            ]);
        }
    }
}
