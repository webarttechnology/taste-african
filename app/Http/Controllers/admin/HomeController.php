<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   

    public function front()
    {
        return view('front.index');
    }

    public function registerPage()
    {
        return view('admin.sign-up');
    }

    public function authorDetails()
    {
        return view('front.authorDetails');
    }

    
}
