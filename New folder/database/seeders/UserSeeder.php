<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
             'name' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => hash('sha256', 'admin1234'),
             'usertype' => 'admin',

            ],
        ]);
        DB::table('users')->insert([
            [
             'name' => 'sieu',
             'email' => 'sieu@gmail.com',
             'password' => 'sieu123',
             'usertype' => 'admin',

            ],
        ]);
    }
}
