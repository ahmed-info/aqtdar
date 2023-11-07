<?php

namespace App\Http\Controllers;

use App\Models\ActivityStuation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActivityStuationRequest;
use App\Http\Requests\UpdateActivityStuationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ActivityStuationController extends Controller
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
        $activityStuations = ActivityStuation::latest()->get();
        return view('pages.activityStuation.index', compact('activityStuations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.activityStuation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActivityStuationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityStuationRequest $request)
    {
         $activityStuation = new ActivityStuation;
         $activityStuation->title = $request->title;
         $activityStuation->description = $request->description;
         $activityStuation->status = $request->status;
         //image
         if($request->file('image')){

            $image = $request->file('image');
            $filename = time().'_'.$image->getClientOriginalName();
            $filename = str_replace(' ','-',$filename);
            $image->move("images/activityStuation",$filename); //move to file
            $activityStuation->image = 'activityStuation'.'/'.$filename;
         }

          $activityStuation->save();
         return redirect()->route('dashboard.activityStuation.index')->with('status', "add activity created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActivityStuation  $activityStuation
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityStuation $activityStuation)
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
        $activityStuation = ActivityStuation::find($id);

        return view('pages.activityStuation.edit', compact('activityStuation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityStuationRequest  $request
     * @param  \App\Models\ActivityStuation  $activityStuation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityStuationRequest $request, int $id)
    {

         $activityStuation = ActivityStuation::find($id);
         $activityStuation->title = $request->title;
         $activityStuation->description = $request->description;
         $activityStuation->status = $request->status;

         if($request->file('image')){
            $destination = 'images/'. $activityStuation->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $image = $request->file('image');
            $filename = time().'_'.$image->getClientOriginalName();
            $filename = str_replace(' ','-',$filename);

            $imagepath = $image->move("images/activityStuation",$filename); //move to file
            $activityStuation->image = 'activityStuation'.'/'.$filename;
         }

         $activityStuation->update();
         return redirect()->route('dashboard.activityStuation.index')->with('status', "activity updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $activityStuation = ActivityStuation::find($id);

        $destination = 'images/'. $activityStuation->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $activityStuation->delete();
        return redirect()->route('dashboard.activityStuation.index')->with('status','activity Deleted Successfully');
    }
}
