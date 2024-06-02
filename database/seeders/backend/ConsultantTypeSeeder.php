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
             'title'=>'Video'
         ],
         [
             'title'=>'Chamber'
         ],
         [
             'title'=>'Audio'
         ]
         ];
         DB::table('consultant_types')->insert($data);
     }
}
