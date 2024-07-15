<?php

namespace App\Http\Controllers\admin;

use App\Models\ContactDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contactdetails = ContactDetails::get();
        // return $contactdetails ; exit;
        return view('admin.contactdetails.show', compact('contactdetails'));
    }

    public function add()
    {
        return view('admin.contactdetails.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'address' => 'required',
            // 'phone' => 'required|numeric',
            // 'email' => 'email',
            // 'image' => 'required',
            // 'facebook' => 'url',
            // 'instragram' => 'url',
            // 'linkdin' => 'url',
            // 'youtube' => 'url',
            // 'twitter' => 'url',
        ]);

        $image = $request->image;
        $imageName = 'images/contactdetails/' . time() . '_' . $image->getClientOriginalName();
        $image->move('images/contactdetails', $imageName);

        ContactDetails::create([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'logo' => $imageName,
            'footer_text' => $request->footer_text,
            'facebook' => $request->facebook,
            'instragram' => $request->instragram,
            'linkdin' => $request->linkdin,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
        ]);

        return redirect()
            ->route('admin.contact')
            ->with('message', 'Data Saved Successfully!!!');
    }

    public function edit($id)
    {
        $contactdetails = ContactDetails::find($id);
        return view('admin.contactdetails.update', compact('contactdetails'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'address' => 'required',
            // 'phone' => 'required|numeric',
            // 'email' => 'email',
            // 'facebook' => 'url',
            // 'instragram' => 'url',
            // 'linkdin' => 'url',
            // 'youtube' => 'url',
            // 'twitter' => 'url',
        ]);

        $contactdetails = ContactDetails::findOrFail($id);

        if (isset($request->image)) {
            $image = $request->file('image');
            $imageName = 'images/contactdetails/' . time() . '_' . $image->getClientOriginalName();
            $image->move('images/contactdetails', $imageName);

            if ($contactdetails->logo) {
                $oldImagePath = public_path($contactdetails->logo);

                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $contactdetails->update([
                'address' => $request->address,
                'phone' => $request->phone,
                'site_name' => $request->site_name,
                'email' => $request->email,
                'logo' => $imageName,
                'footer_text' => $request->footer_text,
                'facebook' => $request->facebook,
                'instragram' => $request->instragram,
                'linkdin' => $request->linkdin,
                'youtube' => $request->youtube,
                'twitter' => $request->twitter,
            ]);
        } else {
            $contactdetails->update([
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'site_name' => $request->site_name,
                'footer_text' => $request->footer_text,
                'facebook' => $request->facebook,
                'instragram' => $request->instragram,
                'linkdin' => $request->linkdin,
                'youtube' => $request->youtube,
                'twitter' => $request->twitter,
            ]);
        }

        return redirect()
            ->back()
            ->with('message', 'Data Updated Successfully!!!');
    }

    public function delete($id)
    {
        $contactdetails = ContactDetails::find($id);
        $contactdetails->delete();
        return redirect()
            ->route('admin.contact')
            ->with('message', 'Data Delete Successfully!!!');
    }
}
