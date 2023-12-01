<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function loginPage()
    {  
        return view('admin.sign-in');
    }

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

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' =>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with('message', 'Login Successfully!!!');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }


    public function index()
    {
        return view('admin.dashboard');
    }


    public function logout()
    {  
        Auth::guard('admin')->logout();
        return redirect()->route('admin.loginPage')->with('message', 'Logout Successfully!!!');
    }

    

}
