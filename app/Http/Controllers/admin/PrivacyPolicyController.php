<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $data = PrivacyPolicy::get();
        return view ('admin.privacy_policy.show', compact('data')) ;
    }

    public function add()
    {
        return view ('admin.privacy_policy.add') ;
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
        ]);

        $PrivacyPolicy = PrivacyPolicy::create([
            'heading' => $request->heading,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.privacy_policy_edit', ['id' => $PrivacyPolicy->id])->with('message', 'Privacy Policy have been added');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
        ]);

        $PrivacyPolicy = PrivacyPolicy::findOrFail($id);

        $dataToUpdate = [];
        
        if ($request->heading !== $PrivacyPolicy->heading) {
            $dataToUpdate['heading'] = $request->heading;
        }
        if ($request->description !== $PrivacyPolicy->description) {
            $dataToUpdate['description'] = $request->description;
        }

        if (!empty($dataToUpdate)) {
            $PrivacyPolicy->update($dataToUpdate);
            return redirect()->route('admin.privacy_policy_edit', ['id' => $id])->with('message', 'Privacy Policy have been updated');
        }

        return redirect()->route('admin.privacy_policy_edit', ['id' => $id]);
    }


    public function edit($id)
    {
        $data = PrivacyPolicy::find($id);
        return view('admin.privacy_policy.edit', compact('data'));
    }
}
