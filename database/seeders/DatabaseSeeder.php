<?php

namespace Database\Seeders;

use Database\Seeders\backend\DistrictSeeder;
use Database\Seeders\backend\CategorySeeder;
use Database\Seeders\backend\ChamberSeeder;
use Database\Seeders\backend\ConsultantTypeSeeder;
use Database\Seeders\backend\DegreeSeeder;
use Database\Seeders\backend\DesignationSeeder;
use Database\Seeders\backend\SidebarSeeder;
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
            DesignationSeeder::class,
            DegreeSeeder::class,
            CategorySeeder::class,
            ConsultantTypeSeeder::class,
            ChamberSeeder::class,
            SidebarSeeder::class,
            DistrictSeeder::class,
        ]);//n
    }
}
