<?php

namespace Database\Seeders;

use Database\Seeders\Admin\CategorySeeder;
use Database\Seeders\backend\DistrictSeeder;
use Database\Seeders\Admin\DesignationSeeder;
use Database\Seeders\Admin\UserSeeder;
use Database\Seeders\Admin\ConsultantTypeSeeder;
use Database\Seeders\Admin\DegreeSeeder;
use App\Models\User;
use Database\Seeders\Backend\SidebarSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            SidebarSeeder::class,
            // DesignationSeeder::class,
            // DegreeSeeder::class,
            // CategorySeeder::class,
            // ConsultantTypeSeeder::class
        ]);//n
    }
}
