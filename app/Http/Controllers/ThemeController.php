<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecontactsRequest;
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
    public function store(StorecontactsRequest $request) 
    {
        //dd($request->all());

        // $validatedData = $request->validate([
        //     'first_name' => 'required|string|min:5',
        //     'last_name' => 'required|string|min:5',
        //     'email' => 'email',
        //     'message' => 'nullable',
        // ]);

        // $validatedData = $request->validate([
        //     'first_name' => 'required|string|min:5',
        //     'last_name' => 'required|string|min:5',
        //     'email' => 'email',
        //     'message' => 'nullable',
        // ],[//if want to change the error message
        //     'first_name.required' => 'bla bla bla '
        // ]);

        $validatedData = $request->validated();
        dd($validatedData);


        //return view('theme.contacts');
    }
}
