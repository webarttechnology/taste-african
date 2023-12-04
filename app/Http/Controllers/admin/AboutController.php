<?php

namespace App\Http\Controllers\admin;

use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::get();
        return view('admin.about.show',  compact('about'));
    }

    public function add()
    {
        return view('admin.about.add');
    }

    public function store(Request $request)
    {    
        $request->validate([
            'about_short_title' => 'required',
            'about_long_title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'about_short_title_1' => 'required',
            'about_long_title_1' => 'required',
            'description_1' => 'required',
            'image_1' => 'required',
            'banner_image' => 'required',
            'banner_sub_heading' => 'required',
            'banner_main_heading' => 'required',
        ]);

        $image = $request->image;
        $imageName = 'images/about/'.time() . '_' . $image->getClientOriginalName();
        $image->move('images/about',$imageName);   

        $image_1 = $request->image_1;
        $imageName_1 = 'images/about/'.time() . '_' . $image_1->getClientOriginalName();
        $image_1->move('images/about',$imageName_1);   

        $banner_image = $request->banner_image;
        $imageName_2 = 'images/about/'.time() . '_' . $banner_image->getClientOriginalName();
        $banner_image->move('images/about',$imageName_2);   

        About::create([
            'about_short_title' => $request->about_short_title,
            'about_long_title' => $request->about_long_title,
            'description' => $request->description,
            'image' => $imageName,
            'about_short_title_1' => $request->about_short_title_1,
            'about_long_title_1' => $request->about_long_title_1,
            'description_1' => $request->description_1,
            'image_1' => $imageName_1,
            'banner_sub_heading' => $request->banner_sub_heading,
            'banner_main_heading' => $request->banner_main_heading,
            'banner_image' => $imageName_2,
        ]);

        return redirect()->route('admin.about')->with('message','Data Saved Successfully!!!');
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.update',  compact('about'));
    }

    public function update(Request $request, $id)
    {    
        // $request->validate([
        //     'name' => 'required',
        //     'image' => 'required',
        // ]);

        $about = About::find($id);

        $request->validate([
            'about_short_title' => 'required',
            'about_long_title' => 'required',
            'description' => 'required',
            'about_short_title_1' => 'required',
            'about_long_title_1' => 'required',
            'description_1' => 'required',
            'banner_sub_heading' => 'required',
            'banner_main_heading' => 'required',
        ]);
    
        // Find the About model instance by ID
        $about = About::findOrFail($id);
    
        // Handle image updates
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'images/about/' . time() . '_' . $image->getClientOriginalName();
            $image->move('images/about', $imageName);
            $about->image = $imageName;
        }
    
        // Handle image_1 updates
        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1');
            $imageName_1 = 'images/about/' . time() . '_' . $image_1->getClientOriginalName();
            $image_1->move('images/about', $imageName_1);
            $about->image_1 = $imageName_1;
        }
    
        // Handle banner_image updates
        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image');
            $imageName_2 = 'images/about/' . time() . '_' . $banner_image->getClientOriginalName();
            $banner_image->move('images/about', $imageName_2);
            $about->banner_image = $imageName_2;
        }
    
        // Update other fields
        $about->about_short_title = $request->about_short_title;
        $about->about_long_title = $request->about_long_title;
        $about->description = $request->description;
        $about->about_short_title_1 = $request->about_short_title_1;
        $about->about_long_title_1 = $request->about_long_title_1;
        $about->description_1 = $request->description_1;
        $about->banner_sub_heading = $request->banner_sub_heading;
        $about->banner_main_heading = $request->banner_main_heading;
    
        // Save the changes
        $about->save();

        return redirect()->route('admin.about')->with('message','Data Updated Successfully!!!');
    }

    public function delete($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect()->route('admin.about')->with('message','Data Delete Successfully!!!');
    }
}
