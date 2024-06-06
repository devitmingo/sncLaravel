<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $records = Employee::all();
        return view ('admin.empList',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.emp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/emp/', $filename);
            $input['image'] =$filename;
        }
        $input['status']=isset($request->status) ? $request->status : 0; 
        $input['createdby'] = Auth::user()->id;
        Employee::create($input);

        return redirect(route('employee.index'))->with('success','Employeer Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $data = $employee;
        return view('admin.emp',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $input = $request->all();
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/emp/', $filename);
            $input['image'] =$filename;
        }
        $input['status']=isset($request->status) ? $request->status : 0; 
        $input['createdby'] = Auth::user()->id;
        unset($input['_method']);
        unset($input['_token']);
        Employee::where('id',$employee->id)->update($input);

        return redirect(route('employee.index'))->with('success','Employeer Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        Employee::where('id',$employee->id)->delete();

        return redirect(route('employee.index'))->with('success','Employeer deleted Successfully');
    }
}
