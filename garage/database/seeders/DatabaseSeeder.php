<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory  as F;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
        ]);
        $mc=20;
        $faker = F::create('de_DE');
        foreach (range(1,$mc) as $_){
            DB::table('mechanics')->insert(
                ['name'=> $faker->firstName(),
                 'surname'=> $faker->lastName()
                ]
            );
        }
        $makers = ['MB', 'VOLVO', 'SCANIA', 'AVIA', 'DAF', 'IVECO', 'MAN', 'FORD', 'MACK', 'TESLA'];
        $a_z = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        foreach (range(1,301) as $_){
            DB::table('trucks')->insert(
                ['maker'=> $makers[rand(0, count($makers)-1)],
                 'plate'=> strtoupper(Str::random(3)).'-'.rand(100,900),
                 'make_year'=> rand(1960,2022),
                 'mechanic_notices'=>$faker->paragraph(rand(1,10)),
                 'mechanic_id'=>rand(1,$mc)
                ]
            );
        }
    }
}
