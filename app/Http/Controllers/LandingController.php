<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Doctor;

class LandingController extends Controller
{
    // Display the index page
    public function index(): View
    {
        $doctors = Doctor::all();
        return view('welcome', compact('doctors'));
    }

    // Show the selected doctor's details
    public function doctorDetails(Doctor $doctor)
    {
        return view('doc_details', compact('doctor'));
    }
}
