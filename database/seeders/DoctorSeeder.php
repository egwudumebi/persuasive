<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qualification;
use App\Models\Specialization;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::factory(20)->create()->each(function ($doctor) {
            // Attach random qualifications
            $qualificationIds = Qualification::inRandomOrder()->limit(6)->pluck('id')->toArray();
            $doctor->qualifications()->attach($qualificationIds);
            
            // Attach random specializations
            $specializationIds = Specialization::inRandomOrder()->limit(6)->pluck('id')->toArray();
            $doctor->specializations()->attach($specializationIds);
        });
    }
}
// 1. php artisan migrate
// 2. php artisan db:seed --class=SpecializationSeeder
// 3. php artisan db:seed --class=QualificationSeeder
// 4. php artisan db:seed --class=PatientSeeder
// 5. php artisan db:seed --class=DoctorSeeder
// 6. php artisan db:seed --class=ReviewSeeder