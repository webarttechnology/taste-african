<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Amenity;
use App\Http\Controllers\Controller;

class AdminAmenityController extends Controller
{
    public function index()
    {
        $data = Amenity::get();
        return view ('admin.amenity.show',  compact('data'));
    }

    public function add()
    {
        return view ('admin.amenity.add');
    }

    public function edit($id)
    {
        $data = Amenity::find($id);
        return view('admin.amenity.update',  compact('data'));
    }

    public function storeOrUpdate(Request $request, $id = null)
    {    
        $request->validate([
            'name' => 'required',
        ]); 

        Amenity::updateOrCreate(
            ['id' => $id], 
            ['name' => $request->name]
        );

        $message = $id ? 'Data Updated Successfully!!!' : 'Data Saved Successfully!!!';

        return redirect()->route('amenities')->with('message', $message);
    }

    public function delete($id)
    {
        $category = Amenity::find($id);
        $category->delete();
        return redirect()->route('amenities')->with('message','Data Delete Successfully!!!');
    }
}
