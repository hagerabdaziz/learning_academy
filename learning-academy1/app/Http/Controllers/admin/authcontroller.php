<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function login(){

        return view ('front.admin.auth.login');
    }
    public function handlelogin(request $request)
    {

        $data=$request->validate([

            'email'=>'required|email',
            'password'=>'required|string',

        ]);

         if(!auth()->guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){

            return back();
         }else{
            return redirect (route('admin.home'));

         }
    }

    public function logout()
    {

     auth()->guard('admin')->logout();

            return redirect (route('admin.login'));

         
    }



}
