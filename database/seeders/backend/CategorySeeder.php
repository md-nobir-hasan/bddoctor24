<?php

namespace Database\Seeders\Backend;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'title' => fake()->title(),
                
                'serial' => 25,
                'status' => 'Active',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
