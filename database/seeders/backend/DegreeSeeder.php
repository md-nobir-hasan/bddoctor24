<?php

namespace Database\Seeders\Backend;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('degrees')->insert([
            [
                'title' => fake()->title(),
                'other_info' => 'fsddf',
				'is_special' => 'fsddf',
                'serial' => 25,
                'status' => 'Active',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
