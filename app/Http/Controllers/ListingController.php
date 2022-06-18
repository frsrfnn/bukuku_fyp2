<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Inertia\Inertia;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBook()
    {
        return Inertia::render('Listing');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $listings = new Listing;
       $listings->name = $request->input('name');
       $listings->author = $request->input('author');
       $listings->year = $request->input('year');
       $listings->price = $request->input('price');
       $listings->kuliyyah = $request->input('kuliyyah');
       $listings->condition = $request->input('condition');
       $listings->description = $request->input('description');
       if ($request->hasFile('image'))
       {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('images/',$filename);
        $listings->image = $filename;
       }
       $listings->save();
       return redirect()->back()->with('status','Book Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
