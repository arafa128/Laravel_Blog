<?php

namespace App\Http\Controllers;

class TestControllers extends Controller
{
    public function arafa()
    {
        return view('index');
    }
    public function printName($name)
    {
        dd("Hello $name from print name function");
    }
    public function testprintname($name = "default")
    {
        dd("Hello $name from print name function");
    }
}

