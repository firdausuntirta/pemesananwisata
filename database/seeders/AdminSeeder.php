<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('admin')->insert([
            'nama' => 'Firdaus',
            'email' => 'firdaus@gmail.com',
            'password' => bcrypt('okeoke'), // Ganti dengan password yang aman
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
