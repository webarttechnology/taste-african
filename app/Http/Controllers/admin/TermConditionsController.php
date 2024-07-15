<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TermsCondition;
use Illuminate\Http\Request;

class TermConditionsController extends Controller
{
    public function index()
    {
        $data = TermsCondition::get();
        return view ('admin.terms_and_conditions.show', compact('data')) ;
    }

    public function add()
    {
        return view ('admin.terms_and_conditions.add') ;
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
        ]);

        $termsCondition = TermsCondition::create([
            'heading' => $request->heading,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.terms_and_conditions_edit', ['id' => $termsCondition->id])->with('message', 'Terms and Conditions have been added');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
        ]);

        $termsCondition = TermsCondition::findOrFail($id);

        $dataToUpdate = [];
        
        if ($request->heading !== $termsCondition->heading) {
            $dataToUpdate['heading'] = $request->heading;
        }
        if ($request->description !== $termsCondition->description) {
            $dataToUpdate['description'] = $request->description;
        }

        if (!empty($dataToUpdate)) {
            $termsCondition->update($dataToUpdate);
            return redirect()->route('admin.terms_and_conditions_edit', ['id' => $id])->with('message', 'Terms and Conditions have been updated');
        }

        return redirect()->route('admin.terms_and_conditions_edit', ['id' => $id]);
    }


    public function edit($id)
    {
        $data = TermsCondition::find($id);
        return view('admin.terms_and_conditions.edit', compact('data'));
    }

}
