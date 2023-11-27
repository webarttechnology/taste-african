<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();

        return view ('admin.user.user', compact('user'));
    }

    public function statusChange(Request $request)
    {
        $user = User::find($request->user_id);

        if (!$user) {
            return response()->json(['success' => false]);
        }
    
        if ($request->status == 'active') {
            $user->status = 'active';
        } elseif ($request->status == 'inactive') {
            $user->status = 'inactive';
        } else {
            return response()->json(['success' => false]);
        }
    
        $user->save();
    
        return response()->json(['success' => true, 'status' => $user->status, 'message' => 'Email sent successfully!']);      
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user')->with('message','User Deleted Successfully!!!');
    }


}
