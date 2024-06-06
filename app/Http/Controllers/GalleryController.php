<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $records = Gallery::all();
            return view ('admin.galleryList',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->all();
        
            $input = $request->all();
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/gallery/', $filename);
                $input['image'] =$filename;
            }
            $input['status']=isset($request->status) ? $request->status : 0; 
            $input['createdby'] = Auth::user()->id;
            Gallery::create($input);
    
            return redirect(route('gallery.index'))->with('success','Gallery Added Successfully');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $data = $gallery;
        return view('admin.gallery',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->all();
        
            $input = $request->all();
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/gallery/', $filename);
                $input['image'] =$filename;
            }
            $input['status']=isset($request->status) ? $request->status : 0; 
            $input['createdby'] = Auth::user()->id;
            Gallery::where('id',$gallery->id)->update($input);
    
            return redirect(route('gallery.index'))->with('success','Gallery Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        Gallery::where('id',$gallery->id)->delete();

        return redirect(route('gallery.index'))->with('success','Gallery deleted Successfully');
    
    }
}
