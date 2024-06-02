<?php

namespace Database\Seeders\Backend;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChamberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chambers')->insert([
            [
                'title' => fake()->title(),
                'location' => 'fsddf',
				'other_info' => 'fsddf',
				'map_link' => 'fsddf',
				'website_link' => 'fsddf',
                'serial' => 25,
                'status' => 'Active',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
