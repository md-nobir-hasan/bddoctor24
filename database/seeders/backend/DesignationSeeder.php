<?php

namespace Database\Seeders\Backend;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('designations')->insert([
            [
                'title' => fake()->title(),
                'inistitute_name' => 'fsddf',
				'other_info' => 'fsddf',
				'url' => 'fsddf',
                'serial' => 25,
                'status' => 'Active',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
