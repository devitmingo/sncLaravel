<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class WebController extends Controller
{
    public function index(){
        $gallery = Gallery::where('status',0)->get();
        return view('index',compact('gallery'));
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
}
