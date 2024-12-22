<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');   
    }

    public function Plist(){
        return view('frontend.pages.property_list');
    }
}
