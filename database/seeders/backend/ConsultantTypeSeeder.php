<?php

namespace Database\Seeders\Backend;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('consultant_types')->insert([
            [
                'title' => fake()->title(),
                'other_info' => 'fsddf',
                'serial' => 25,
                'status' => 'Active',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
