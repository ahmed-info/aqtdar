<?php

namespace App\Http\Controllers;

use App\Models\Socialmedia;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSocialmediaRequest;
use App\Http\Requests\UpdateSocialmediaRequest;

class SocialmediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSocialmediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialmediaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function show(Socialmedia $socialmedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $socialmedia = Socialmedia::first();

        return view('pages.socialmedia.edit', compact('socialmedia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSocialmediaRequest  $request
     * @param  \App\Models\Socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialmediaRequest $request, Socialmedia $socialmedia)
    {
       
         $socialmedia = Socialmedia::first();
         $socialmedia->facebook = $request->facebook;
         $socialmedia->instagram = $request->instagram;
         $socialmedia->twitter = $request->twitter;
         $socialmedia->youtube = $request->youtube;
         $socialmedia->email = $request->email;

         $socialmedia->update();
         return redirect()->route('dashboard.socialmedia.edit')->with('success', "social media updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Socialmedia $socialmedia)
    {
        //
    }
}
