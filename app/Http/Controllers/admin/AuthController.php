<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Blog;
use App\Models\BusinessListing;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    public function loginPage()
    {  
        return view('admin.sign-in');
    }

    public function registerPage()
    {  
        return view('admin.sign-up');
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
            'role' => 'admin',
            'phone' => 0000000000,
            'status' => 'active',
            'image' => "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png",
        ]);

        return redirect()->route('admin.loginPage')->with('message','Register Successfully!!!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' =>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with('message', 'Login Successfully!!!');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }


    public function index()
    {
        $listing_count = BusinessListing::count();
        $category_count = Category::count();
        $blog_count = Blog::count();
        return view('admin.dashboard', compact('listing_count', 'category_count', 'blog_count'));
    }

    public function userProfile()
    {  
        $users = User::get();
        return view('admin.user.user', compact('users'));
    }


    public function statusChange($id, $status)
    {       
        $user = User::find($id);
        if (!$user && !$status) {
            return redirect()->back()->with('error', 'User not found.');
        }
        
        if($status == 'delete'){
            $user->delete();
            return redirect()->back()->with('error', 'User account has been delete..');
        }else{
             $user->status = $status == 'active' ? 'active' : 'deactive';
             $user->save();
            return redirect()->back()->with('error', 'User account has been '.$status.'..');
        }
        
       
    }

    public function forgot_Pass()
    {    
        return view('admin.forgot_password');
    }


    public function logout()
    {  
        Auth::logout();
        return redirect()->route('admin.loginPage')->with('message', 'Logout Successfully!!!');
    }

    

}
