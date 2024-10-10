<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Jobs\UserWelcomeEmailJob;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use App\Models\Patient;
use App\Models\Doctor;
use App\Services\MailService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }
    // Show patient register page
    public function showRegister(): View 
    {
        return view('register');
    }

    // Show doctors' register page
    public function showDoctorRegister(): View 
    {
        return view('register_doctor');
    }

    // Show login page
    public function showLogin(): View 
    {
        return view('login');
    }

    // Authenticate a user's login request
    public function authenticate(Request $request): RedirectResponse
    {
        // dd($request);
        try{
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            if (Auth::guard('docs')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $doctor = Auth::guard('docs')->user();
                if ($doctor->status == 'active') {
                    return redirect()->intended('/dashboard/doctor');
                }
                Auth::guard('docs')->logout();
                return back()->with('error', "Account Barred! \n Contact the Admin");
            } elseif (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::guard('web')->user();
                if ($user->status == 'active') {
                    return redirect()->intended('/dashboard');
                }
                Auth::guard('web')->logout();
                return back()->with('error', "Account Barred! \n Contact the Admin");
            } else {
                return back()->with('error', 'Invalid credentials');
            }
            
            
        }catch(ValidationException $e) {
            return back()->withErrors($e->validator->errors());
        }
        
    }

    // Create Patient
    public function createPatient(RegisterFormRequest $request): RedirectResponse
    {
        try{
            $patient = Patient::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            if ($patient) {
                $recipient = $request->email;
                $data = [
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                ];
                // Use the service to send the welcome email
                $this->mailService->userWelcomeMail($recipient, $data);
                Auth::login($patient);
                // return response()->json(['message' => 'Email queued successfully']);
            }
            return redirect('/dashboard');

        } catch (ValidationException $e){
            return back()->withErrors($e->validator->errors());
        }
        
        
    }

    // Create Doctor
    public function createDoctor(Request $request): RedirectResponse
    {
        try{
            $request->validate([
                'firstname' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Doctor::class],
                'phone' => ['required', 'min:11', 'max:13'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
    
            $doctor = Doctor::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            if ($doctor) {
                Auth::guard('docs')->login($doctor);
            }
            return redirect('/dashboard/doctor');

        } catch (ValidationException $e){
            return back()->withErrors($e->validator->errors());
        }
        
        
    }

    // Logout a session == Delete session values
    public function logout(): RedirectResponse
    {
        Auth::logout();
        session()->regenerate();
        return redirect()->route('login');
    }

    public function docLogout(): RedirectResponse
    {
        Auth::guard('docs')->logout();
        session()->regenerate();
        return redirect()->route('login');
    }

    // Test the mail functionality
    public function sendMail()
    {
        dump([
            'success' => true,
            'message' => 'Code reached here',
        ]);
        // Inside a controller or service
        $recipient = 'example@example.com';
        $data = ['name' => 'Kemakolam Ozioma']; // Your mail data

        // Use the service to send the welcome email
        $this->mailService->userWelcomeMail($recipient, $data);
        return response()->json(['message' => 'Email queued successfully']);
    }
}
