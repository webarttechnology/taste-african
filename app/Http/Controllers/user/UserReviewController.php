<?php

namespace App\Http\Controllers\user;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserReviewController extends Controller
{
    public function review( Request $request)
    {
        Review::create([
            'list_id' => $request->list_id,
            'user_id' => Auth::user()->id,
            'star' => $request->star,
            'name' => $request->name,
            'email' => $request->email,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('message', 'Message sent successfully.');
    }

    public function reviewShow()
    {       
        return redirect()->back()->with('message', 'Mes');
    }
}
