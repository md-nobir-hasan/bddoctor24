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
        $data = [
         [
             'title'=>'Video',
             'serial' => 1,
         ],
         [
             'title'=>'Chamber',
             'serial' => 2,
         ],
         [
             'title'=>'Audio',
             'serial' => 3,
         ]
         ];
         DB::table('consultant_types')->insert($data);
     }
}
