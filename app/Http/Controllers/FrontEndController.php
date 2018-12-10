<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function profile(){
        return view('frontend.partials.companyprofile');
    }
    public function contact(){
        return view('frontend.partials.contact');
    }
}
