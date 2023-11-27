<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategotyController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('admin.category.show',  compact('category'));
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {    
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $image = $request->image;
        $imageName = 'images/category/'.time() . '_' . $image->getClientOriginalName();
        $image->move('images/category',$imageName);   

        Category::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);

        return redirect()->route('category_listing')->with('message','Data Saved Successfully!!!');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.update',  compact('category'));
    }

    public function update(Request $request, $id)
    {    
        // $request->validate([
        //     'name' => 'required',
        //     'image' => 'required',
        // ]);

        $category = Category::find($id);

        if ($request->hasFile('image')) 
        {
            $image = $request->image;
            $imageName = 'images/category/'.time() . '_' . $image->getClientOriginalName();
            $image->move('images/category',$imageName);   

            $category->update([
                'name' => $request->name,
                'image' => $imageName,
            ]);
        } 
       else 
       {
        $category->update([
            'name' => $request->name,
        ]);
       }

        return redirect()->route('category_listing')->with('message','Data Updated Successfully!!!');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category_listing')->with('message','Data Delete Successfully!!!');
    }
}
