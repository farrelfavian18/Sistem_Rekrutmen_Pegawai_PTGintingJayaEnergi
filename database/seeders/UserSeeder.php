<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'gj-energy@gmail.com',
            'password' => '$2y$10$4R/nicYgHRiwmO.lLsJ4nOkCeiBgDPw./T7XHkzHcf5oHiYIyg5oq',
            'role' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'Farrel Favian',
            'email' => 'farrelfavian18@gmail.com',
            'password' => '$2y$10$NqgS/x3kVLx7.WYtF265vOktX/hv4E9kTSSvOxwr9bXg6xq3fzeTu',
            'role' => '0'
        ]);
    }
}
