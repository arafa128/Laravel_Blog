<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //request in larvel
        // $data = $request->all();
        // $data = $request->input('name');
        // $data = $request->query('age');
        // $data = $request->except(['name','age']);
        // $data = $request->only(['name','age']);
        // dd($data);
        // dd("PostsController.index");
        //response in laravel
        //$data = 'string';
        //$data = ['1','2','3','4'];
        // return response()->json([
        //     'name' => 'Abigail',
        //     'state' => 'CA',
        // ]);
        // return view('index');
        //abort (404);
        // return redirect()->route('print direct test');
        //return redirect('/ss/dd/ff');
        //return redirect()->away('https://www.youtube.com/watch?v=kb-_GbpH3sQ');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd("PostsController.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
