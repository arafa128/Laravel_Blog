<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecontactsRequest;
use App\Models\Contact;
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
    {   //search data
        // $data = Contact::where('first_name' , '=', 'ali')->get();
        // for ids
        // $data = Contact::find(0);
        // $data = Contact::all();
        // dd($data);

        //creat data
        // $contacts = new Contact();
        // $contacts->first_name = 'ibrahem';
        // $contacts->last_name = 'khaled';
        // $contacts->email = 'ibrahem@gmain.com';
        // $contacts->message = 'ibrahem\'s concats';
        // $contacts->save();
        //fillable methode for securty
        // Contact::create([
        //     'first_name' => 'yasser',
        //     'last_name' => 'mamdoh',
        //     'email' => 'yasser@gmail.com',
        //     'message' => 'mamdoh\s contact',
        //     'status' => '1',
        // ]);

        //updated data
        // $contact = Contact::find(15);
        // $contact -> last_name = 'Updated last name';
        // $contact ->save();

        //update recored using mass assignment((fillbale))
        // $contact = Contact::find(16);
        // $contact->update([
        //     'last_name' => 'updated using fillbale',
        //     'status' => '0',
        // ]);
        //delet record
        // $contact = Contact::find(17)->delete();


        // dd('deleted successfully');
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
        // dd($validatedData);

        Contact::create($validatedData);

        return back()->with('status','your message has been successfully sent');


        //return view('theme.contacts');
    }
}
