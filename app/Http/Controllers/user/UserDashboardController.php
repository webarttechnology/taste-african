<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserDashboardController extends Controller
{
    public function userDashboard()
    {
        return view ('user.authentication.dashboard');
    }
}
