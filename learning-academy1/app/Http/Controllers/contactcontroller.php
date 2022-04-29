<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\setting;

class contactcontroller extends Controller
{
    public function index(){

        $data['settings']=setting::first();
        return view('front.contact.index')->with( $data);
    }
}
