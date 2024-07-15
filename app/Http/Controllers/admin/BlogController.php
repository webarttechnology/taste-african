<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::get();
        return view('admin.blog.show',  compact('blog'));
    }

    public function add()
    {
        return view('admin.blog.add');
    }

    public function store(Request $request)
    {    
        $request->validate([
            'category' => 'required',
            'icon' => 'required',
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $image = $request->image;
        $imageName = 'images/blog/'.time() . '_' . $image->getClientOriginalName();
        $image->move('images/blog',$imageName);   

        $icon = $request->icon;
        $iconName = 'images/blog/'.time() . '_' . $icon->getClientOriginalName();
        $icon->move('images/blog',$iconName);   

        Blog::create([
            'category' => $request->category,
            'category_icon' => $iconName,
            'title' => $request->title,
            'image' => $imageName,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
        ]);

        return redirect()->route('admin.blog')->with('message','Data Saved Successfully!!!');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.update',  compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
           
            'title' => 'required',
           
            'description' => 'required',
        ]);
    
        // Find the About model instance by ID
        $about = Blog::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'images/blog/' . time() . '_' . $image->getClientOriginalName();
            $image->move('images/blog', $imageName);
            $about->image = $imageName;
        }
    
        if ($request->hasFile('icon')) {  
            $icon = $request->icon;
            $iconName = 'images/blog/'.time() . '_' . $icon->getClientOriginalName();
            $icon->move('images/blog',$iconName); 
            $about->category_icon = $iconName;
        }
    
        // Update other fields
        $about->slug = Str::slug($request->title);
        $about->category = $request->category;
        $about->title = $request->title;
        $about->description = $request->description;
    
        // Save the changes
        $about->save();

        return redirect()->route('admin.blog')->with('message','Data Updated Successfully!!!');
    }

    public function delete($id)
    {
        $about = Blog::find($id);
        $about->delete();
        return redirect()->route('admin.about')->with('message','Data Delete Successfully!!!');
    }
}
