<?php

namespace App\Http\Controllers;

use App\Models\notice;
use Illuminate\Http\Request;
use Auth;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Notice::all();
        return view ('admin.noticeview',compact('records')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        notice::create($input);
        return redirect(route('notice.index'))->with('success','Notice Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(notice $notice)
    {
      // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notice $notice)
    {
        $data = $notice;
        return view('admin.notice',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, notice $notice)
    {
     $input = $request->all();
            
            $input['status']=isset($request->status) ? $request->status : 0; 
            //$input['createdby'] = Auth::user()->id;
            unset($input['_method']);
        unset($input['_token']);
            Notice::where('id',$notice->id)->update($input);
    
            return redirect(route('notice.index'))->with('success','Notice Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notice $notice)
    {
        Notice::where('id',$notice->id)->delete();

        return redirect(route('notice.index'))->with('success','Employeer deleted Successfully');
    }
}
