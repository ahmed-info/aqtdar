<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Member;
use App\Models\ActivityStuation;
use App\Models\Socialmedia;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Canvas\Tag;
use Canvas\Post;
use Canvas\Topic;
use Illuminate\View\view;


class MainController extends Controller
{

    public function index()
    {
        $slides = Slide::all();
        $socialmedia = Socialmedia::first();
        $stuations = ActivityStuation::where('status',"موقف سياسي")->latest()->limit(3)->get();
        $activities = ActivityStuation::where('status',"نشاط")->latest()->limit(3)->get();

        $items = [];

        return view('main.home', compact('slides','activities','stuations','socialmedia'));
    }
    public function situations()  {

        $stuations = ActivityStuation::where('status',"موقف سياسي")->latest()->get();
        $socialmedia = Socialmedia::first();

        return view('main.stuations',compact('stuations','socialmedia'));
    }
    public function activities()  {
        $activities = ActivityStuation::where('status',"نشاط")->latest()->get();
        $socialmedia = Socialmedia::first();

        return view('main.activities', compact('activities','socialmedia'));
    }

    public function ourVision(){

        $socialmedia = Socialmedia::first();
        return view('main.ourVision',compact('socialmedia'));
    }

    public function aboutUs()  {
        $socialmedia = Socialmedia::first();
        $members = Member::all();

        return view('main.aboutUs',compact('socialmedia','members'));
    }

    public function contactUs()  {
        $socialmedia = Socialmedia::first();
        return view('main.contactUs', compact('socialmedia'));
    }

    public function show(int $id){
        $activityStuation = ActivityStuation::find($id);
        $socialmedia = Socialmedia::first();

        return view('main.activityStuationShow', compact('activityStuation','socialmedia'));
    }


}
