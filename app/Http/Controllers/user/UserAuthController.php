<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\ContactDetails;

class UserAuthController extends Controller
{

     // User register Page:
     public function registerForm()
     {
         return view ('user.authentication.register');
     }

     public function register(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|unique:users',
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'phone' => ['required', new PhoneNumber],
            ]);

            $image = $request->image;
            $imageName = 'images/User/' . time() . '_' . $image->getClientOriginalName();
            $image->move('images/User', $imageName);

            User::create([
                'name' => $request->name,
                'image' => $imageName,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password), 
                'role' => "user",
                'status' => "active",
            ]);

            return redirect()->route('login')->with('message','Register Successfully!!!');
        }

     
    public function loginForm()
    {
        $contact = ContactDetails::get();
        return view ('front.user-authentication.login', compact('contact'));
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' =>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) 
        {
            $user = Auth::user();

            if ($user->role === 'user') {
                return redirect()->route('user.dashboard')->with('message', 'Login Successfully!!!');
            } else {
                return redirect()->route('business.dashboard')->with('message', 'Login Successfully!!!');
            }
        } 
        else 
        {
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
    }


    


    
}
