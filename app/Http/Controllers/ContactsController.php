<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactsRequest;
use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function store (StoreContactsRequest $request)
    {

        $data =  $request->validated();

        Contacts::create($data);

        return back()->with('success-message', 'Message sent successfully!');
    }
}
