<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
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
         $members = Member::all();
        return view('pages.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'string|required',
            'college'=>'string|nullable',
            'department'=>'string|nullable',
            'position'=>'string|nullable',
            'description'=>'string|required',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:6096',
         ]);
         $member = new Member;
         $member->name = $request->name;
         $member->college = $request->college;
         $member->department = $request->department;
         $member->position = $request->position;
         $member->description = $request->description;
         //image
         if($request->file('image')){

            $image = $request->file('image');
            $filename = time().'_'.$image->getClientOriginalName();
            $filename = str_replace(' ','-',$filename);
            $image->move("images/member",$filename); //move to file
            $member->image = 'member'.'/'.$filename;
         }

          $member->save();
         return redirect()->route('dashboard.member.index')->with('status', "add Member created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $member = Member::find($id);
        return view('pages.member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberRequest  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $this->validate($request,[
            'name'=>'string|required',
            'college'=>'string|nullable',
            'department'=>'string|nullable',
            'position'=>'string|nullable',
            'description'=>'string|required',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
         ]);

         $member = Member::find($id);
         $member->name = $request->name;
         $member->college = $request->college;
         $member->department = $request->department;
         $member->position = $request->position;
         $member->description = $request->description;

         if($request->file('image')){
            $destination = 'images/'. $member->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $image = $request->file('image');
            $filename = time().'_'.$image->getClientOriginalName();
            $filename = str_replace(' ','-',$filename);

            $imagepath = $image->move("images/member",$filename); //move to file
            $member->image = 'member'.'/'.$filename;
         }

         $member->update();
         return redirect()->route('dashboard.member.index')->with('status', "Member updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $member = Member::find($id);
        $destination = 'images/'. $member->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $member->delete();
        return redirect()->route('dashboard.member.index')->with('status','Member Deleted Successfully');
    }
}
