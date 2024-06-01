<?php

namespace Database\Seeders\Backend;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =  [
            ['title' => 'Bagerhat','serial'=>1],
            ['title' => 'Bandarban','serial'=>2],
            ['title' => 'Barguna','serial'=>3],
            ['title' => 'Barisal','serial'=>4],
            ['title' => 'Bhola','serial'=>5],
            ['title' => 'Bogra','serial'=>6],
            ['title' => 'Brahmanbaria','serial'=>7],
            ['title' => 'Chandpur','serial'=>8],
            ['title' => 'Chapai Nawabganj','serial'=>9],
            ['title' => 'Chattogram','serial'=>10],
            ['title' => 'Chuadanga','serial'=>11],
            ['title' => 'Comilla','serial'=>12],
            ['title' => "Cox's Bazar",'serial'=>13],
            ['title' => 'Dhaka','serial'=>14],
            ['title' => 'Dinajpur','serial'=>15],
            ['title' => 'Faridpur','serial'=>16],
            ['title' => 'Feni','serial'=>17],
            ['title' => 'Gaibandha','serial'=>18],
            ['title' => 'Gazipur','serial'=>19],
            ['title' => 'Gopalganj','serial'=>20],
            ['title' => 'Habiganj','serial'=>21],
            ['title' => 'Jamalpur','serial'=>22],
            ['title' => 'Jashore','serial'=>23],
            ['title' => 'Jhalokathi','serial'=>24],
            ['title' => 'Jhenaidah','serial'=>25],
            ['title' => 'Joypurhat','serial'=>26],
            ['title' => 'Khagrachari','serial'=>27],
            ['title' => 'Khulna','serial'=>28],
            ['title' => 'Kishoreganj','serial'=>29],
            ['title' => 'Kurigram','serial'=>30],
            ['title' => 'Kushtia','serial'=>31],
            ['title' => 'Lakshmipur','serial'=>32],
            ['title' => 'Lalmonirhat','serial'=>33],
            ['title' => 'Madaripur','serial'=>34],
            ['title' => 'Magura','serial'=>35],
            ['title' => 'Manikganj','serial'=>36],
            ['title' => 'Meherpur','serial'=>37],
            ['title' => 'Moulvibazar','serial'=>38],
            ['title' => 'Munshiganj','serial'=>39],
            ['title' => 'Mymensingh','serial'=>40],
            ['title' => 'Naogaon','serial'=>41],
            ['title' => 'Narail','serial'=>42],
            ['title' => 'Narayanganj','serial'=>43],
            ['title' => 'Narsingdi','serial'=>44],
            ['title' => 'Natore','serial'=>45],
            ['title' => 'Netrokona','serial'=>46],
            ['title' => 'Nilphamari','serial'=>47],
            ['title' => 'Noakhali','serial'=>48],
            ['title' => 'Pabna','serial'=>49],
            ['title' => 'Panchagarh','serial'=>50],
            ['title' => 'Patuakhali','serial'=>51],
            ['title' => 'Pirojpur','serial'=>52],
            ['title' => 'Rajbari','serial'=>53],
            ['title' => 'Rajshahi','serial'=>54],
            ['title' => 'Rangamati','serial'=>55],
            ['title' => 'Rangpur','serial'=>56],
            ['title' => 'Satkhira','serial'=>57],
            ['title' => 'Shariatpur','serial'=>58],
            ['title' => 'Sherpur','serial'=>59],
            ['title' => 'Sirajganj','serial'=>60],
            ['title' => 'Sunamganj','serial'=>61],
            ['title' => 'Sylhet','serial'=>62],
            ['title' => 'Tangail','serial'=>63],
            ['title' => 'Thakurgaon','serial'=>64]
        ];
        DB::table('districts')->insert($data);
    }
}
