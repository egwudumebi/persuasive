<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class QualificationSeeder extends Seeder
{
    public function run()
    {
        $qualifications = [
            ['qualification' => 'MBBS', 'description' => 'Bachelor of Medicine, Bachelor of Surgery'],
            ['qualification' => 'MD', 'description' => 'Doctor of Medicine'],
            ['qualification' => 'DO', 'description' => 'Doctor of Osteopathic Medicine'],
            ['qualification' => 'PhD', 'description' => 'Doctor of Philosophy (in a relevant field)'],
            ['qualification' => 'MSc', 'description' => 'Master of Science (in a relevant field)'],
            ['qualification' => 'MCh', 'description' => 'Master of Chirurgiae (Master of Surgery)'],
            ['qualification' => 'DNB', 'description' => 'Diplomate of National Board (India)'],
            ['qualification' => 'FRCS', 'description' => 'Fellow of the Royal College of Surgeons'],
            ['qualification' => 'FRCP', 'description' => 'Fellow of the Royal College of Physicians'],
            ['qualification' => 'DM', 'description' => 'Doctorate of Medicine (specialized medical degree)'],
            ['qualification' => 'MRCP', 'description' => 'Member of the Royal College of Physicians'],
            ['qualification' => 'MRCS', 'description' => 'Member of the Royal College of Surgeons'],
            ['qualification' => 'BSc', 'description' => 'Bachelor of Science (in a relevant field)'],
            ['qualification' => 'MPH', 'description' => 'Master of Public Health'],
            ['qualification' => 'MPhil', 'description' => 'Master of Philosophy (in a relevant field)'],
            ['qualification' => 'DGO', 'description' => 'Diploma in Gynecology and Obstetrics'],
            ['qualification' => 'DLO', 'description' => 'Diploma in Otorhinolaryngology'],
            ['qualification' => 'DA', 'description' => 'Diploma in Anesthesiology'],
            ['qualification' => 'DCH', 'description' => 'Diploma in Child Health'],
            ['qualification' => 'DMRD', 'description' => 'Diploma in Medical Radio Diagnosis'],
            ['qualification' => 'DVD', 'description' => 'Diploma in Dermatology, Venereology, and Leprosy'],
            ['qualification' => 'PGDCC', 'description' => 'Post Graduate Diploma in Clinical Cardiology'],
            ['qualification' => 'FCPS', 'description' => 'Fellow of the College of Physicians and Surgeons'],
            ['qualification' => 'FACS', 'description' => 'Fellow of the American College of Surgeons'],
            ['qualification' => 'FACC', 'description' => 'Fellow of the American College of Cardiology'],
            ['qualification' => 'FCCP', 'description' => 'Fellow of the American College of Chest Physicians'],
            ['qualification' => 'FACOG', 'description' => 'Fellow of the American College of Obstetricians and Gynecologists'],
            ['qualification' => 'FAAP', 'description' => 'Fellow of the American Academy of Pediatrics'],
        ];

        foreach ($qualifications as $qualification) {
            DB::table('qualifications')->insert([
                'qualification' => $qualification['qualification'],
                'description' => $qualification['description'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
