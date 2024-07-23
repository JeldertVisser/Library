<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => Str::random(10).' '.Str::random(10),
            'author' => fake()->name(),
            'release_date' => now(),
            'pages' => random_int(100, 300)
        ]);
    }
}
