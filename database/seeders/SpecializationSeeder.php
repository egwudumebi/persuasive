<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SpecializationSeeder extends Seeder
{
    public function run()
    {
        $specializations = [
            'Cardiology',
            'Dermatology',
            'Neurology',
            'Pediatrics',
            'Orthopedics',
            'Gynecology',
            'Obstetrics',
            'Ophthalmology',
            'Psychiatry',
            'Radiology',
            'Anesthesiology',
            'Oncology',
            'Endocrinology',
            'Gastroenterology',
            'Nephrology',
            'Hematology',
            'Immunology',
            'Rheumatology',
            'Pulmonology',
            'Urology',
            'Otolaryngology',
            'Plastic Surgery',
            'General Surgery',
            'Family Medicine',
            'Internal Medicine',
            'Emergency Medicine',
            'Sports Medicine',
            'Allergy and Immunology',
            'Infectious Disease',
            'Pathology',
            'Geriatrics',
            'Occupational Medicine',
            'Palliative Care',
        ];

        foreach ($specializations as $specialization) {
            DB::table('specializations')->insert([
                'title' => $specialization,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
