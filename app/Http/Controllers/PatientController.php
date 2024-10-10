<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Review;
use App\Models\Qualification;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Validation\ValidationException;

class PatientController extends Controller
{
    // Show the index page
    public function index(): View 
    {
        return view('patient.index');
    }

    // Show the profile edit page
    public function showProfileEdit(): View
    {
        $patient = Auth::guard('web')->user();
        // dd($patient);
        return view('patient.edit', compact('patient'));
    }

    // Update the patient's record
    public function edit(Request $request): RedirectResponse
    {
        // Define the validation rules for this request
        $validated = $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(Patient::class)->ignore($request->user()->id)],
            'phone' => ['required', 'string'],
            'profile' => ['nullable', 'file', 'mimes:jpeg,jpg,png', 'max:5120'],
            'gender' => ['nullable', 'string'],
            'dob' => ['required', 'Date', 'before:today'],
            'bg' => ['required', 'string'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'country' => ['required', 'string'],
        ]);
        try{
            $request->user()->fill($validated);
            if($request->hasFile('profile')) {
                $file = $request->file('profile');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $path = 'profiles/patients/';
                $filePath = $file->move($path, $filename);

                $request->user()->profile = $path . $filename;
            }

            $request->user()->save();
            // dd($request->all());

            return Redirect::route('edit')->with('status', 'profile updated successfully');
        }catch (ValidationException $e) {
            return back()->withErrors($e->validator->errors());
        }

        
    }

    // Show the searchDoctor View
    public function showSearchDoctor(): View
    {

        // Retrieve the active doctor along with their qualifications and specializations
        $active_doctors = Doctor::where('status', 'active')
        ->with('qualifications')
        ->with('specializations')
        ->withCount('reviews')->paginate(5);
        // Pass the doctor to the view
        return view('patient.searchDoctor', ['doctors' => $active_doctors]);
       
    }

    // Show the selected Doctor
    public function viewDoctor($id): View
    {
        // Eager loading all necessary relationships
        $doctor = Doctor::where('id', $id)
            ->with(['qualifications', 'specializations', 'reviews.patient'])
            ->withCount('reviews')
            ->withSum('reviews', 'rating')
            ->firstOrFail();

        // Get reviews for the doctor, if any
        $reviews = $doctor->reviews;

        // Pass the data to the view
        return view('patient.viewDoctor', [
            'doctor' => $doctor,
            'reviews' => $reviews,
        ]);
    }


}
