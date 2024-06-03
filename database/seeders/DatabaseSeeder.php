<?php

namespace Database\Seeders;

use Database\Seeders\backend\DistrictSeeder;
use Database\Seeders\Backend\CategorySeeder;
use Database\Seeders\Backend\ChamberSeeder;
use Database\Seeders\Backend\ConsultantTypeSeeder;
use Database\Seeders\Backend\DegreeSeeder;
use Database\Seeders\Backend\DesignationSeeder;
use Database\Seeders\Backend\SidebarSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            DistrictSeeder::class,
            DesignationSeeder::class,
            DegreeSeeder::class,
            CategorySeeder::class,
            ConsultantTypeSeeder::class,
            ChamberSeeder::class,
            SidebarSeeder::class,
        ]);//n
    }
}
