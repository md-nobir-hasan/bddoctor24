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
                'n_sidebar_id' => NULL,
                'is_parent' => true,
                'serial' => 1,
                'status' => 'Active'
            ], [
                'title' => 'District',
                'access' => 'District',
                'route' => 'setup.district.',
                'n_sidebar_id' => 1,
                'is_parent' => '',
                'serial' => 2,
                'status' => 'Active'
            ],
            [
                "title" => "Category",
                "access" => "Category",
                "route" => "setup.category.",
                "is_parent" => 0,
                "n_sidebar_id" => 1,
                "serial" => 3,
                "status" => "Active"
            ],
            [
                "title" => "ConsultantType",
                "access" => "ConsultantType",
                "route" => "setup.consultant-type.",
                "is_parent" => 0,
                "n_sidebar_id" => 1,
                "serial" => 4,
                "status" => "Active",
            ],
            [
                "title" => "Chamber",
                "access" => "Chamber",
                "route" => "setup.chamber.",
                "is_parent" => 0,
                "n_sidebar_id" => 1,
                "serial" => 5,
                "status" => "Active",
            ],
            [
                "title" => "Degree",
                "access" => "Degree",
                "route" => "setup.degree.",
                "is_parent" => 0,
                "n_sidebar_id" => 1,
                "serial" => 6,
                "status" => "Active",
            ],
            [
                "title" => "Designation",
                "access" => "Designation",
                "route" => "setup.designation.",
                "is_parent" => 0,
                "n_sidebar_id" => 1,
                "serial" => 7,
                "status" => "Active",
            ],
            [
                "title" => "Doctor",
                "access" => "Doctor",
                "route" => "doctor.",
                "is_parent" => true,
                "n_sidebar_id" => null,
                "serial" => 8,
                "status" => "Active",
            ],
            //$slot
        ]);
    }
}
