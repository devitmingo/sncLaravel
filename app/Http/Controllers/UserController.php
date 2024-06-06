<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('admin.user');
    }
     
    public function store(Request $request){
        $input = $request->all();
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'mobile' => 'required|unique:users|max:10',
            'password'=>'required|max:255|confirmed',
            'password_confirmation' => 'required|same:password',

        ]);

        $input['password'] = Hash::make($request->password);
       // return $input;
        unset($input['password_confirmation']);
        
        $row = User::create($input);
        if($row){
            return redirect(route('dashboard'))->with('success','Welcome to Dashboard');
        }
        else{
            return back()->with('fail','Something wrong');

        }
    }
}
