<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function admin(){
        return view ('admin.login');
    }
    public function dashboard(){
        return view ('admin.dashboard');
    }

    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required',
            'password'=>'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 0])) {
            return redirect(route('dashboard'))->with('success','Welcome Dashboard');  
        }else{
            return back()->with('fail','success','Something Wrong');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(route('admin'))->with('success','Logout Suceessfully');
    }
}
