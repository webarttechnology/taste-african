<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{

    public function registerPage()
    {
        return view ('user.authentication.register');
    }

    public function login()
    {
        return view ('user.authentication.login');
    }


    public function register(Request $request)
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
            'role' => "user",
            'status' => "active",
        ]);

        return redirect()->route('login')->with('message','Register Successfully!!!');
    }
}
