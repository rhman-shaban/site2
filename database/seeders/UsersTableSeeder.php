<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        db::table('users')->insert([
            'name' => 'shaban',
            'email' => 'ab.abou.abda@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
