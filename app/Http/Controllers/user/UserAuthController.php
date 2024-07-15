<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\ContactDetails;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class UserAuthController extends Controller
{
    // User register Page:
    public function registerForm()
    {
        return view('user.authentication.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => 'required',
        ]);

        $imageName = null; 

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageName = 'images/User/' . time() . '_' . $image->getClientOriginalName();
            $image->move('images/User', $imageName);
        } else {
            $imageName = 'front\img\user.png'; 
        }

        try {

        $user = User::create([
            'name' => $request->name,
            'image' => $imageName,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'verification_link' => Str::random(60),
            'status' => 'active',
        ]);

        Mail::to($user->email)->send(new VerifyEmail($user->verification_link));

        return redirect()
            ->back()
            ->with('message', 'Registration successful! Please check your email for verification.');
    
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()
                ->back()
                ->with('error', 'Oops! Connection could not be established with host mail.africanfoodusa.com!!');
        } 
    }


    public function loginForm()
    {
        $contact = ContactDetails::get();
        return view('front.user-authentication.login', compact('contact'));
    }

    public function verify($link)
    {
        $user = User::where('verification_link', $link)->first();

        if( empty($user) )
        {
            return redirect()
                    ->route('login');
        }

        $user->verified = 1;
        $user->save();

        return redirect()
                    ->route('login')
                    ->with('message', 'You have been verified successfully');
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();

    //         if ($user->role === 'user' && $user->verified) {
    //             return redirect()
    //                 ->route('user.dashboard')
    //                 ->with('message', 'Login Successfull!!!');
    //         } elseif ($user->role === 'business_owner' && $user->verified) {
    //             return redirect()
    //                 ->route('business.dashboard')
    //                 ->with('message', 'Login Successfull!!!');
    //         } else {
    //             Auth::logout();
    //             return redirect()
    //                 ->route('login')
    //                 ->with('error', 'Please verify your email first!!!');
    //         }
    //     } else {
    //         return redirect()
    //             ->route('login')
    //             ->with('error', 'Invalid email or password');
    //     }
    // }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the user is active
            if ($user->status == 'deactive') {
                Auth::logout();
                return redirect()->route('login')->with('error', 'This Email Id is inactive right now, Please try another Email Id!!');
            }

            if ($user->role === 'user' && $user->verified) {
                return redirect()
                    ->route('user.dashboard')
                    ->with('message', 'Login Successful!!!');
            } elseif ($user->role === 'business_owner' && $user->verified) {
                return redirect()
                    ->route('business.dashboard')
                    ->with('message', 'Login Successful!!!');
            } else {
                Auth::logout();
                  Mail::to($user->email)->send(new VerifyEmail($user->verification_link));
                return redirect()
                    ->route('login')
                    ->with('error', 'Please verify your email first!!!');
            }
        } else {
            return redirect()
                ->route('login')
                ->with('error', 'Invalid email or password');
        }
    }

}
