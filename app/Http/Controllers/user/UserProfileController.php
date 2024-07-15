<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserInfo;
use App\Rules\PhoneNumber;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function profile()
    {
        //  dd(Auth::user()->role);
         
        $user = Auth::user();
        $userWithInfo = User::with('info')->find($user->id);
        return view ('front.profile.user-profile',  compact('userWithInfo'));
    }

    public function updateOrCreate(Request $request )
    {  
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => ['required', new PhoneNumber],

            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string|max:10',
            'address' => 'required|string',
        ]);

        $user = Auth::user();

        User::updateOrCreate(
            ['id' => $user->id],
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]
       );

        UserInfo::updateOrCreate(
            ['user_id' => $user->id],
            [
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
        ]);

        return redirect()->back()->with('message', 'Profile updated successfully.');
    }

    public function changepassword()
    {   
        return view ('front.profile.change-password');
    }

    public function changepasswordStore(Request $request)
    {  
       $user = Auth::user();

       $request->validate([
           'old_password' => 'required',
           'password' => 'required|min:8|same:confirm_password',
       ]);
   
       if (!Hash::check($request->old_password, $user->password)) {
           return redirect()->back()->with('error', 'The old password is Not Matched.');
       }
   
       $user->update([
           'password' => Hash::make($request->password),
       ]);

       Auth::logout();
   
       return redirect()->route('login')->with('message', 'Password changed successfully. Login Again With New Password!!');   
    }

    public function deleteProfile()
    {
        $user_id = Auth::user()->id;

        // Find the user by ID
        $user = User::find($user_id);
    
        if ($user) {
            // Update the user's status to "deactive"
            $user->status = 'deactive';
            
            // Save the changes
            $user->save();
    
            // Optionally, log the user out after deactivating their profile
            Auth::logout();
    
            // Redirect to a page with a success message
            return redirect()->route('login')->with('error', 'Your profile has been deactivated.');    
        } else {
            // Handle the case where the user is not found (optional)
            return redirect()->route('profile')->withErrors(['error' => 'User not found.']);
        }
        
    }
}
