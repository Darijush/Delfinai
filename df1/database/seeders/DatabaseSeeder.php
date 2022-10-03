<?php

namespace Database\Seeders;

use Carbon\Carbon as CarbonCarbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
        DB::table('users')->insert([
            'name' => 'bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123'),
            'created_at' => $time->addSeconds(1),
            'updated_at' => $time
        ]);
        DB::table('users')->insert([
            'name' => 'briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
            'created_at' => $time->addSeconds(1),
            'updated_at' => $time
        ]);

        foreach (['Dama', 'Horror', 'Comedy', 'Boring', 'Action', 'Cartoon'] as $cat) {
            DB::table('categories')->insert([
                'title' => $cat,
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time
            ]);
        }
        foreach(['Cobra', 'Jaguar', 'Sharks', 'Cats and Dogs', 'Coporob', 'Funny movie', 'Lara and Tombs', 'Jasa and Vue'] as $movie){
            DB::table('movies')->insert([
                'title' => $movie,
                'price' => rand(100,1000)/100,
                'category_id'=> rand(1,6),
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time
            ]);
        }
    }
}
