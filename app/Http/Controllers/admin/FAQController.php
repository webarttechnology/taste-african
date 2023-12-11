<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\Faq as ModelsFaq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $data = Faq::with('selected_category')->get();
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

    public function edit()
    {
        
    }


    public function delete()
    {
        
    }
}
