<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'status' => 1
            ],
            [
                'title' => 'Anesthesiology (Pain) Specialist',
                'status' => 1
            ],
            [
                'title' => 'Breast Specialist',
                'status' => 1
            ],
            [
                'title' => 'Cancer Specialist',
                'status' => 1
            ],
            [
                'title' => 'Cancer Surgery Specialist',
                'status' => 1
            ],
            [
                'title' => 'Cardiovascular & Thoracic Surgery Specialist',
                'status' => 1
            ],
            [
                'title' => 'Cardiology Specialist',
                'status' => 1
            ],
            [
                'title' => 'Chest & Asthma Specialist',
                'status' => 1
            ],
            [
                'title' => 'Child Specialist',
                'status' => 1
            ],
            [
                'title' => 'Child Cardiology Specialist',
                'status' => 1
            ],
            [
                'title' => 'Child Gastroenterologist',
                'status' => 1
            ],
            [
                'title' => ' Child Neurology Specialist',
                'status' => 1
            ],
            [
                'title' => 'Colorectal Surgery Specialist',
                'status' => 1
            ],
            [
                'title' => 'Colorectal Surgery (Female) Specialist',
                'status' => 1
            ],
            [
                'title' => 'Dental Specialist',
                'status' => 1
            ],
            [
                'title' => 'Endocrinology (Diabetes & Hormone) Specialist',
                'status' => 1
            ],
            [
                'title' => 'Dietitian/Nutritionist',
                'status' => 1
            ],
            [
                'title' => 'ENT Specialist',
                'status' => 1
            ],
            [
                'title' => 'Eye Specialist',
                'status' => 1
            ],
            [
                'title' => 'Neuro-ophthalmologist',
                'status' => 1
            ],
            [
                'title' => 'Gastroenterology Specialist',
                'status' => 1
            ],
            [
                'title' => 'General & Laparoscopic Surgery Specialist',
                'status' => 1
            ],
            [
                'title' => 'Gynecology & Obstetrics Specialist',
                'status' => 1
            ],
            [
                'title' => 'Gynecological Oncologist',
                'status' => 1
            ],
            [
                'title' => 'Hematology (Blood) Specialist',
                'status' => 1
            ],
            [
                'title' => 'Pediatric Hematologist',
                'status' => 1
            ],
            [
                'title' => ' Hepatobiliary Surgery Specialist',
                'status' => 1
            ],
            [
                'title' => ' Homeopathy Doctor',
                'status' => 1
            ],
            [
                'title' => 'Infertility Specialist',
                'status' => 1
            ],
            [
                'title' => ' Kidney Specialist',
                'status' => 1
            ],
            [
                'title' => 'Liver Specialist',
                'status' => 1
            ],
            [
                'title' => 'Medicine Specialist',
                'status' => 1
            ],
            [
                'title' => 'Neurology/Neuromedicine Specialist',
                'status' => 1
            ],
            [
                'title' => 'Neurosurgery Specialist',
                'status' => 1
            ],
            [
                'title' => 'Normal Delivery Specialist',
                'status' => 1
            ],
            [
                'title' => ' Occupational Therapist',
                'status' => 1
            ],
            [
                'title' => ' Orthopedic Specialist',
                'status' => 1
            ],
            [
                'title' => 'Pediatric Nephrologist',
                'status' => 1
            ],
            [
                'title' => 'Pediatric Orthopedic Surgeon',
                'status' => 1
            ],
            [
                'title' => 'Pediatric Surgery Specialist',
                'status' => 1
            ],
            [
                'title' => ' Physical Medicine Specialist',
                'status' => 1
            ],
            [
                'title' => 'Physiotherapy Specialist',
                'status' => 1
            ],
            [
                'title' => 'Plastic Surgery Specialist',
                'status' => 1
            ],
            [
                'title' => ' Psychiatry (Mental) Specialist',
                'status' => 1
            ],
            [
                'title' => ' Psychologist/Psychotherapist',
                'status' => 1
            ],
            [
                'title' => 'Rheumatology Specialist',
                'status' => 1
            ],
            [
                'title' => 'Sex Specialist',
                'status' => 1
            ],
            [
                'title' => '  Skin Specialist',
                'status' => 1
            ],
            [
                'title' => 'Urology Specialist',
                'status' => 1
            ],
            [
                'title' => 'Vascular Surgery Specialist',
                'status' => 1
            ],
        ];

    DB::table('categories')->insert($categories);


    }
}
