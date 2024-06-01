<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

                [
                    'title'=>"MBBS (Tongji Medical University, China) MPH, North South University (NSU), PhD
                    Fellow (Pain & Paralysis). President Gold Medalist & Special Training in
                    Acupuncture",
                    'other_info'=>'',
                    'status'=>1
                ],
                [
                    'title'=>"MBBS (DMC), PhD (Anesthesiology, Japan)",
                    'other_info'=>'',
                    'status'=>1
                ],
                [
                    'title'=>"MBBS, FCPS (Anesthesiology), Training (Japan)",
                    'other_info'=>'',
                    'status'=>1
                ],
                [
                    'title'=>"MBBS, BCS (Health), DA (BSMMU), FAPM (India), Member (IASP), Member
                    (BSSP) Fellowship in Pain Management (Aesculap Academy, Germany & Daradia,
                    India), Member (EULAR-Rheumatology), Editorial Board Member (Bangladesh
                    Journal of Pain), Advance Trained on MSK Ultrasound",
                    'other_info'=>'',
                    'status'=>1
                ],
                [
                    'title'=>"MBBS, DA, MCPS, FCPS (Anesthesiology)",
                    'other_info'=>'',
                    'status'=>1
                ],
                [
                    'title'=>"MBBS, DA (DU), FIPM (India), Fellowship in Pain Management (India)",
                    'other_info'=>'',
                    'status'=>1
                ],
                [
                    'title'=>"MBBS, BCS (Health), DA, MD (BSMMU), Member (IASP), Member (BSSP)
                    Fellowship in Interventional Pain Management (Aesculap Academy, Germany &
                    Daradia, India), Member (EULAR-Rheumatology), Editorial Board Member
                    (Bangladesh Journal of Pain), Advance Trained on MSK Ultrasound",
                    'other_info'=>'',
                    'status'=>1
                ],
                [
                    'title'=>"MBBS, DA, MD, FCPS",
                    'other_info'=>'',
                    'status'=>1
                ],
                [
                    'title'=>"MBBS (DNMC), DA (DMC), FCPS (Anesthesiology)",
                    'other_info'=>'',
                    'status'=>1
                ],
            ];
        DB::table('degrees')->insert($data);
    }
}
