<?php

namespace Database\Seeders\Backend;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->insert([
            [
                'title' => fake()->title(),
                'designation_id' => 1,
				'category_id' => 1,
				'gendar' => 'fsddf',
				'experience' => 'fsddf',
				'degree_id' => 1,
				'consultant_type_id' => 1,
				'chamber_id' => 1,
				'district_id' => 1,
				'other_info' => 'fsddf',
                'serial' => 25,
                'status' => 'Active',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
