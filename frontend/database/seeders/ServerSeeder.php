<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servers')->insert([
            'host_name' => Str::random(10),
            'username' => Str::random(5),
            'password' => Hash::make('password'),
            'server_port' => Int::random(4),
        ]);
    }
}
