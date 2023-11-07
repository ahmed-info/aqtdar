<?php

namespace App\Http\Controllers;

use App\Models\Join;
use App\Models\Attachment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJoinRequest;
use App\Http\Requests\UpdateJoinRequest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Exports\JoinExport;

class JoinController extends Controller
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
        $joins = Join::all();
        return view('pages.join.index', compact('joins'));
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
     * @param  \App\Http\Requests\StoreJoinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fullname'=>'required',
            'placeOfBirth'=>'string|nullable',
            'birthday'=>'required|date',
            'gender'=>'required|string',
            'academicAchievement'=>'string|nullable',
            'address'=>'string|nullable',
            'phone'=>'required|string',
            'voterCardNumber'=>'string|nullable',
            'accountScoial'=>'string|nullable',
            'attach' => 'mimes:jpeg,bmp,png,pdf|max:4096',
            // 'attach.*' => 'required'
            // 'image_cover'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:6096',
         ]);
         $join = new Join;
         $join->fullname = $request->fullname;
         $join->placeOfBirth = $request->placeOfBirth;
         $join->birthday = $request->birthday;
         $join->gender = $request->gender;
         $join->academicAchievement = $request->academicAchievement;
         $join->address = $request->address;
         $join->phone = $request->phone;
         $join->voterCardNumber = $request->voterCardNumber;
         $join->accountScoial = $request->accountScoial;
          $join->save();

          $attachs = [];
          //return $request->all();
          if($request->hasfile('attach'))
           {
            //return "okkk";
              foreach($request->file('attach') as $attach)
              {
                  $filename = $join->fullname.'_'. time().'_'.rand(1,100).'.'.$attach->extension();
                  $filename = str_replace(' ','-',$filename);
                  $attach->move("images/attach", $filename);//move to file
                //   $image->move("images/slide",$filename); //move to file

                  //$attachs[] = $name;
                  $attachment= new Attachment();
                  $attachment->join_id = $join->id;
                  $attachment->attach = 'attach'.'/'.$filename;
                  $attachment->save();

              }
           }
         return redirect()->route('main.home')->with('status', "تم اضافة المعلومات بنجاح");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Join  $join
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $join = Join::find($id);

        return view('pages.join.show', compact('join'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Join  $join
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $join = Join::find($id);

        return view('pages.join.edit', compact('join'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJoinRequest  $request
     * @param  \App\Models\Join  $join
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
             $this->validate($request,[
            'fullname'=>'required',
            'placeOfBirth'=>'string|nullable',
            'birthday'=>'required|date',
            'gender'=>'required|string',
            'academicAchievement'=>'string|nullable',
            'address'=>'string|nullable',
            'phone'=>'required|string',
            'voterCardNumber'=>'string|nullable',
            'accountScoial'=>'string|nullable',
            // 'attach' => 'required',
            // 'attach.*' => 'required'
            // 'image_cover'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:6096',
         ]);
         $join = Join::find($id);
        $join->fullname = $request->fullname;
         $join->placeOfBirth = $request->placeOfBirth;
         $join->birthday = $request->birthday;
         $join->gender = $request->gender;
         $join->academicAchievement = $request->academicAchievement;
         $join->address = $request->address;
         $join->phone = $request->phone;
         $join->voterCardNumber = $request->voterCardNumber;
         $join->accountScoial = $request->accountScoial;
        //   //image
        //   if($request->file('image')){

        //     $image = $request->file('image');
        //     $filename = time().'_'.$image->getClientOriginalName();
        //     $filename = str_replace(' ','-',$filename);
        //     $image->move("images/event",$filename); //move to file
        //     $event->image = 'event'.'/'.$filename;
        //  }

          $join->update();
         return redirect()->route('dashboard.join.index')->with('status', "تم تحديث معلومات العضو بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Join  $join
     * @return \Illuminate\Http\Response
     */
    public function destroy(Join $join)
    {
        //
    }

   

    public function import(Request $request){
        Excel::import(new UserImport, $request->file('users'));
        return redirect('/')->with('success','All good');
    }

     public function export()
    {
        return Excel::download(new JoinExport, 'طلبات الانضمام.xlsx');
    }
}
