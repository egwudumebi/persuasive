<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create doctors and patients
        $doctors = Doctor::where('status', 'active')->get();
        $patients = Patient::where('status', 'active')->get();

        // Create reviews and assign foreign keys
        // Check if there are active doctors and patients
        if ($doctors->isEmpty()) {
            $this->command->info('No active doctors found. Please seed some active doctors first.');
            return;
        }

        if ($patients->isEmpty()) {
            $this->command->info('No active patients found. Please seed some active patients first.');
            return;
        }
        
        Review::factory()->count(100)->make()->each(function ($review) use ($doctors, $patients) {
            $review->doctor_id = $doctors->random()->id;
            $review->patient_id = $patients->random()->id;
            $review->save();
        });
    }
}
