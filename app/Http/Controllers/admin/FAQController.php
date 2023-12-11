<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $data = FAQ::get();
        return view ('admin.faq.show', compact('data')) ;
    }

    public function add()
    {
        return view ('admin.faq.add') ;
    }

    public function store()
    {
        
    }

    public function edit()
    {
        
    }


    public function delete()
    {
        
    }
}
