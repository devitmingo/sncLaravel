<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Employee;
use App\Models\Notice;

class WebController extends Controller
{
    public function index(Request $request){
        $gallery = Gallery::where('status',0)->limit(4)->get();
        $emp = Employee::where('status',0)->get();
        return view('index',compact('gallery','emp'));
    }
    public function aboutus(){
        return view('about');
    }
    public function contactus(){
        return view('contact');
    }
    public function ourgallery(){
        $gallery = Gallery::where('status',0)->get();
        return view('gallery',compact('gallery'));
    }
    public function noticeboard(){
        $notice = Notice::where('status',0)->get();
        return view('notice',compact('notice'));
    }
}
