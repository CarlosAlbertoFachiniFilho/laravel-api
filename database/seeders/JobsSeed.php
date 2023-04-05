<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;

class JobsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobs')->insert([
            'title' => Str::random(10),
            'description' => Str::random(1000),
            'local' => 'São Paulo / SP',
            'remote' => 'no',
            'type' => 3,
            'company_id' => 1,
        ]);
    }
}
