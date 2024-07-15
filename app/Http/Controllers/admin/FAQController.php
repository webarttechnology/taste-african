<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faq as ModelsFaq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $data = ModelsFaq::with('selected_category')->get();
        return view ('admin.faq.show', compact('data')) ;
    }

    public function add()
    {
        $categories = FaqCategory::get();
        return view ('admin.faq.add', compact('categories')) ;
    }

    public function store( Request $request )
    {
        $request->validate([
            'category' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);

        ModelsFaq::create([
            'category' => $request->category,
            'question' => $request->question,
            'ans' => $request->answer,
        ]);

        return redirect()->route('admin.faq')->with('message', 'Faq has been added');
    }

    public function update( Request $request, $id )
    {
        $faq = ModelsFaq::find($id);
        $faq->category = $request->category;
        $faq->question = $request->question;
        $faq->ans = $request->answer;
        $faq->save();

        return redirect()->route('admin.faq')->with('message', 'Faq has been updated');
    }  

    public function edit($id)
    {
        $faq = ModelsFaq::find($id);
        $categories = FaqCategory::get();
        return view('admin.faq.edit', compact('categories', 'faq'));
    }


    public function delete($id)
    {
        $faq = ModelsFaq::find($id);
        $faq->delete();

        return redirect()->route('admin.faq')->with('message', 'Faq has been deleted');
    }
}
