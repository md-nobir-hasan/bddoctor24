<?php

namespace Database\Seeders\Backend;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories =
            [
                [
                    'title' => 'Acupuncture Specialist',
                    'status' => 'Active',
                    'serial' => 1,
                ],
                [
                    'title' => 'Anesthesiology (Pain) Specialist',
                    'status' => 'Active',
                    'serial' => 2,
                ],
                [
                    'title' => 'Breast Specialist',
                    'status' => 'Active',
                    'serial' => 3,
                ],
                [
                    'title' => 'Cancer Specialist',
                    'status' => 'Active',
                    'serial' => 4,
                ],
                [
                    'title' => 'Cancer Surgery Specialist',
                    'status' => 'Active',
                    'serial' => 5,
                ],
                [
                    'title' => 'Cardiovascular & Thoracic Surgery Specialist',
                    'status' => 'Active',
                    'serial' => 6,
                ],
                [
                    'title' => 'Cardiology Specialist',
                    'status' => 'Active',
                    'serial' => 7,
                ],
                [
                    'title' => 'Chest & Asthma Specialist',
                    'status' => 'Active',
                    'serial' => 8,
                ],
                [
                    'title' => 'Child Specialist',
                    'status' => 'Active',
                    'serial' => 9,
                ],
                [
                    'title' => 'Child Cardiology Specialist',
                    'status' => 'Active',
                    'serial' => 10,
                ],
                [
                    'title' => 'Child Gastroenterologist',
                    'status' => 'Active',
                    'serial' => 11,
                ],
                [
                    'title' => ' Child Neurology Specialist',
                    'status' => 'Active',
                    'serial' => 12,
                ],
                [
                    'title' => 'Colorectal Surgery Specialist',
                    'status' => 'Active',
                    'serial' => 13,
                ],
                [
                    'title' => 'Colorectal Surgery (Female) Specialist',
                    'status' => 'Active',
                    'serial' => 14,
                ],
                [
                    'title' => 'Dental Specialist',
                    'status' => 'Active',
                    'serial' => 15,
                ],
                [
                    'title' => 'Endocrinology (Diabetes & Hormone) Specialist',
                    'status' => 'Active',
                    'serial' => 16,
                ],
                [
                    'title' => 'Dietitian/Nutritionist',
                    'status' => 'Active',
                    'serial' => 16,
                ],
                [
                    'title' => 'ENT Specialist',
                    'status' => 'Active',
                    'serial' => 18,
                ],
                [
                    'title' => 'Eye Specialist',
                    'status' => 'Active',
                    'serial' => 19,
                ],
                [
                    'title' => 'Neuro-ophthalmologist',
                    'status' => 'Active',
                    'serial' => 20,
                ],
                [
                    'title' => 'Gastroenterology Specialist',
                    'status' => 'Active',
                    'serial' => 21,
                ],
                [
                    'title' => 'General & Laparoscopic Surgery Specialist',
                    'status' => 'Active',
                    'serial' => 22,
                ],
                [
                    'title' => 'Gynecology & Obstetrics Specialist',
                    'status' => 'Active',
                    'serial' => 23,
                ],
                [
                    'title' => 'Gynecological Oncologist',
                    'status' => 'Active',
                    'serial' => 24,
                ],
                [
                    'title' => 'Hematology (Blood) Specialist',
                    'status' => 'Active',
                    'serial' => 25,
                ],
                [
                    'title' => 'Pediatric Hematologist',
                    'status' => 'Active',
                    'serial' => 26,
                ],
                [
                    'title' => ' Hepatobiliary Surgery Specialist',
                    'status' => 'Active',
                    'serial' => 27,
                ],
                [
                    'title' => ' Homeopathy Doctor',
                    'status' => 'Active',
                    'serial' => 28,
                ],
                [
                    'title' => 'Infertility Specialist',
                    'status' => 'Active',
                    'serial' => 29,
                ],
                [
                    'title' => ' Kidney Specialist',
                    'status' => 'Active',
                    'serial' => 30,
                ],
                [
                    'title' => 'Liver Specialist',
                    'status' => 'Active',
                    'serial' => 31,
                ],
                [
                    'title' => 'Medicine Specialist',
                    'status' => 'Active',
                    'serial' => 32,
                ],
                [
                    'title' => 'Neurology/Neuromedicine Specialist',
                    'status' => 'Active',
                    'serial' => 33,
                ],
                [
                    'title' => 'Neurosurgery Specialist',
                    'status' => 'Active',
                    'serial' => 34,
                ],
                [
                    'title' => 'Normal Delivery Specialist',
                    'status' => 'Active',
                    'serial' => 35,
                ],
                [
                    'title' => ' Occupational Therapist',
                    'status' => 'Active',
                    'serial' => 37,
                ],
                [
                    'title' => ' Orthopedic Specialist',
                    'status' => 'Active',
                    'serial' => 38,
                ],
                [
                    'title' => 'Pediatric Nephrologist',
                    'status' => 'Active',
                    'serial' => 39,
                ],
                [
                    'title' => 'Pediatric Orthopedic Surgeon',
                    'status' => 'Active',
                    'serial' => 40,
                ],
                [
                    'title' => 'Pediatric Surgery Specialist',
                    'status' => 'Active',
                    'serial' => 41,
                ],
                [
                    'title' => ' Physical Medicine Specialist',
                    'status' => 'Active',
                    'serial' => 42,
                ],
                [
                    'title' => 'Physiotherapy Specialist',
                    'status' => 'Active',
                    'serial' => 43,
                ],
                [
                    'title' => 'Plastic Surgery Specialist',
                    'status' => 'Active',
                    'serial' => 44,
                ],
                [
                    'title' => ' Psychiatry (Mental) Specialist',
                    'status' => 'Active',
                    'serial' => 45,
                ],
                [
                    'title' => ' Psychologist/Psychotherapist',
                    'status' => 'Active',
                    'serial' => 46,
                ],
                [
                    'title' => 'Rheumatology Specialist',
                    'status' => 'Active',
                    'serial' => 47,
                ],
                [
                    'title' => 'Sex Specialist',
                    'status' => 'Active',
                    'serial' => 48,
                ],
                [
                    'title' => '  Skin Specialist',
                    'status' => 'Active',
                    'serial' => 49,
                ],
                [
                    'title' => 'Urology Specialist',
                    'status' => 'Active',
                    'serial' => 50,
                ],
                [
                    'title' => 'Vascular Surgery Specialist',
                    'status' => 'Active',
                    'serial' => 51,
                ],
            ];

        DB::table('categories')->insert($categories);
    }
}
