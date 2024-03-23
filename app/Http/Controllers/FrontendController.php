<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('Frontend_folder.index');
    }

    public function men()
    {
        return view('Frontend_folder.men');
    }

    public function cosmetic()
    {
        return view('Frontend_folder.cosmetic');
    }
    public function contact()
    {
        return view('Frontend_folder.contact');
    }
}
