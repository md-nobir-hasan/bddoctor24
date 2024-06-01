<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = [
        [
            'name' => "Supper Admin",
            'email' => 'admin@bddoctor24.com',
            'password'=>Hash::make('@bddoctor.com')
        ]
        ];
        DB::table('users')->insert($data);
    }
}
