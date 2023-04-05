<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class CompaniesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('companies')->insert([
            'name' => Str::random(10),
            'email'=> Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'website'  => Str::random(10),
            'logo'  => Str::random(10),

        ]);
    }
}
