<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\PhoneNumber;
use Illuminate\Support\Facades\Password;



class BusinessAuthenticationController extends Controller
{

    
    // Business Owner register Page:
    public function registerForm()
    {
        return view ('front.user-authentication.signup');
    }

    // Business Owner register :
    public function businessRegister(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', new PhoneNumber],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password), 
            'role' => "business_owner",
            'status' => "active",
        ]);

        return redirect()->route('login')->with('message','Register Successfully!!!');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' =>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('business.dashboard')->with('message', 'Login Successfully!!!');
        } else {
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
    }

    public function forgot_Pass()
    {    
        return view('front.user-authentication.forgot_password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('message', __($status))
            : back()->withErrors(['error' => __($status)]);
        
    }


    public function showResetForm( Request $request )
    {
        $token = $request->get('token');
        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        // $request->validate([
        //     'token' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed|min:8',
        // ]);


        if ($request->password == $request->password_confirmation) {
            User::where('email_verified_at', $request->verifyCode)->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('business.loginPage')->with('success', 'Password Changed Login Now!!');
        } else {
            return redirect()->with('error', 'Password & Confirm Password Must Be Same');
        }
    }


    

    public function businessDashboard()
    {
        return view ('front.user-authentication.dashboard');
    } 

   

    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('front');
    }
    
}
