<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_data;
use App\Models\Designations;
use App\Models\Departments;

class userController extends Controller
{
    public function index(){
        $users=User_data::all();
        return view('/welcome',['users'=>$users]);
    }
    public function dept_create(){
        return view('/add_departments'); 
    }

    public function dept_store(Request $request){

        $dept=new Departments();
        $dept->name=$request->department;
        $dept->save();
        return view('/welcome'); 
    }

    public function desig_create(){
        return view('/add_designations'); 
    }

    public function desig_store(Request $request){

        $dept=new Designations();
        $dept->name=$request->designation;
        $dept->save();
        return view('/welcome'); 
    }

    public function user_create(){
        $dept=Departments::all();
        $desig=Designations::all();

        return view('/add_user',['depts'=>$dept,'desigs'=>$desig]); 
    }

    public function user_store(Request $request){

        
        $user = new User_data();
        $user->name = $request->input('name');
        $user->department_id = $request->input('department_id');
        $user->designation_id = $request->input('designation_id');
        $user->contact = $request->input('contact');
        $user->save();
        return view('/welcome'); 
    }

}
