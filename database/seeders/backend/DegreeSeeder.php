<?php

namespace Database\Seeders\Backend;

use Carbon\Carbon;
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
                    'serial'=>1,
                    'status'=>"Active"
                ],
                [
                    'title'=>"MBBS (DMC), PhD (Anesthesiology, Japan)",
                    'other_info'=>'',
                    'serial'=>2,
                    'status'=>"Active"
                ],
                [
                    'title'=>"MBBS, FCPS (Anesthesiology), Training (Japan)",
                    'other_info'=>'',
                    'serial'=>3,
                    'status'=>"Active"
                ],
                [
                    'title'=>"MBBS, BCS (Health), DA (BSMMU), FAPM (India), Member (IASP), Member
                    (BSSP) Fellowship in Pain Management (Aesculap Academy, Germany & Daradia,
                    India), Member (EULAR-Rheumatology), Editorial Board Member (Bangladesh
                    Journal of Pain), Advance Trained on MSK Ultrasound",
                    'other_info'=>'',
                    'serial'=>4,
                    'status'=>"Active"
                ],
                [
                    'title'=>"MBBS, DA, MCPS, FCPS (Anesthesiology)",
                    'other_info'=>'',
                    'serial'=>5,
                    'status'=>"Active"
                ],
                [
                    'title'=>"MBBS, DA (DU), FIPM (India), Fellowship in Pain Management (India)",
                    'other_info'=>'',
                    'serial'=>6,
                    'status'=>"Active"
                ],
                [
                    'title'=>"MBBS, BCS (Health), DA, MD (BSMMU), Member (IASP), Member (BSSP)
                    Fellowship in Interventional Pain Management (Aesculap Academy, Germany &
                    Daradia, India), Member (EULAR-Rheumatology), Editorial Board Member
                    (Bangladesh Journal of Pain), Advance Trained on MSK Ultrasound",
                    'other_info'=>'',
                    'serial'=>7,
                    'status'=>"Active"
                ],
                [
                    'title'=>"MBBS, DA, MD, FCPS",
                    'other_info'=>'',
                    'serial'=>8,
                    'status'=>"Active"
                ],
                [
                    'title'=>"MBBS (DNMC), DA (DMC), FCPS (Anesthesiology)",
                    'other_info'=>'',
                    'serial'=>9,
                    'status'=>"Active"
                ],
            ];
        DB::table('degrees')->insert($data);
    }
}
