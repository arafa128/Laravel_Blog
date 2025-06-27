<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Output\Theme;

class ThemeController extends Controller
{
    public function about() 
    {
        return view('theme.about');
    }
    public function services() 
    {
        return view('theme.services');
    }
    public function contacts() 
    {
        return view('theme.contacts');
    }
}
