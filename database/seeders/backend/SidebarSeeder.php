<?php

namespace Database\Seeders\Backend;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SidebarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('n_sidebars')->insert([
            [
                'title' => 'setup',
                'access' => 'setup',
                'route' => NULL,
                'n_sidebar_id' => 'NULL',
                'is_parent' => true,
                'serial' => 1,
                'status' => 'Active'
            ], [
                'title' => 'District',
                'access' => 'District',
                'route' => 'setup.district.',
                'n_sidebar_id' => 1,
                'is_parent' => '',
                'serial' => '1',
                'status' => 'Active'
            ],
            [
                "title" => "Category",
                "access" => "Category",
                "route" => "setup.category.",
                "is_parent" => 0,
                "n_sidebar_id" => 1,
                "serial" => 1,
                "status" => "Active"
            ],
            [
                "title" => "ConsultantType",
                "access" => "ConsultantType",
                "route" => "setup.consultant-type.",
                "is_parent" => 0,
                "n_sidebar_id" => 1,
                "serial" => 2,
                "status" => "Active",
            ],
            //$slot
        ]);
    }
}
