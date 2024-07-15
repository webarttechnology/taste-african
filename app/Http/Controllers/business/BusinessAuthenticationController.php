<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use App\Models\ContactDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\PhoneNumber;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use App\Models\Review;
use Carbon\Carbon; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;



class BusinessAuthenticationController extends Controller
{    
    // Business Owner register Page:
    public function registerForm()
    {
        $contact = ContactDetails::get();
        return view ('front.user-authentication.signup', compact('contact'));
    }

    // Business Owner register :
    public function businessRegister(Request $request)
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
        }

        try {

        $user = User::create([
            'name' => $request->name,
            'image' => $imageName,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password), 
            'role' => "business_owner",
            'verification_link' => Str::random(60),
            'status' => "active",
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

    // public function sendResetLink(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|exists:users',
    //     ]);

    //     $token = Str::random(64);

    //     DB::table('password_reset_tokens')->insert([
    //         'email' => $request->email, 
    //         'token' => $token, 
    //         'created_at' => Carbon::now()
    //       ]);

    //     Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
    //         $message->to($request->email);
    //         $message->subject('Reset Password');
    //     });

    //     return back()->with('message', 'We have e-mailed your password reset link!');
    // }
    
    
     public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        $existingToken = DB::table('password_reset_tokens')->where('email', $request->email)->first();

         if ($existingToken) {
            DB::table('password_reset_tokens')
                ->where('email', $request->email)
                ->update([
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);
        } else {
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }

        Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    

    public function showResetForm($token)
    {
        $token = $token;
        return view('auth.reset-password', ['token' => $token]);
    }


    public function resetPassword(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_reset_tokens')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();

        if(!$updatePassword){
                                return back()->withInput()->with('error', 'Invalid token!');
                            }

        User::where('email', $request->email)
                            ->update(['password' => Hash::make($request->password)]);
       
        DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();

        return redirect()->back()->with('message', 'Your password has been reset. Please login with your new password.');
    }



    public function businessDashboard()
    {
        $contact = ContactDetails::get();
        $user = Auth::user(); 
        $userWithInfo = User::with('info')->find($user->id);
        //return $userWithInfo; exit;
        return view ('front.user-authentication.dashboard', compact('contact', 'userWithInfo'));
    }    

    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('front');
    }
    
}
