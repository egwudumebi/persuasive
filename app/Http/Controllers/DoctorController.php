<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // Show the index page
    public function index(): View 
    {
        return view('doctor.index');
    }
}
