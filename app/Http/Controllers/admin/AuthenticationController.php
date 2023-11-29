<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\PhoneNumber;
use Illuminate\Support\Facades\Password;



class AuthenticationController extends Controller
{
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'role' => $request->role,
            'status' => "active",
        ]);

        return redirect()->route('business.loginPage')->with('message','Register Successfully!!!');
    }

    public function loginPage()
    {  
        return view('admin.sign-in');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' =>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard')->with('message', 'Login Successfully!!!');
        } else {
            return redirect()->route('business.loginPage')->with('error', 'Invalid email or password');
        }
    }


    public function logout()
    {  
        Auth::logout();
        return redirect()->route('admin.loginPage')->with('message', 'Logout Successfully!!!');
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

    public function userRegisterPage()
    {
        return view ('front.user-authentication.signup');
    }

    public function userRegister(Request $request)
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

    public function userDashboard()
    {
        return view ('front.user-authentication.dashboard');
    }

    public function userLoginPage()
    {
        return view ('front.user-authentication.login');
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' =>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('user.dashboard')->with('message', 'Login Successfully!!!');
        } else {
            return redirect()->route('user.loginPage')->with('error', 'Invalid email or password');
        }
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('front');
    }



    
}
