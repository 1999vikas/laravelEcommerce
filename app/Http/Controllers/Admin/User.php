<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index(Request $request){


        if($request->isMethod('post')){

            $rules=[
                'email'=>'required|email',
                'password'=>'required'
            ];
    
            $customMessages=[
                'email.required'=>'Email Address is Required !',
                'password.required'=>'Password Is Reuqired'
            ];
    
            $this->validate($request,$rules,$customMessages);
            
           // print_r($request->all());
        }
        
        return view('register');
    }
}
