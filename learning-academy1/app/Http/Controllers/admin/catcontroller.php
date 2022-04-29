<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cat;

class catcontroller extends Controller
{
    public function index(){

       $data['cats']= cat::select('id','name')->orderBy('id','DESC')->get();
       return view ('front.admin.cats.index')->with($data);
    }

    public function create(){

        return view ('front.admin.cats.create');
    }

    public function store(request $request){

        $data=$request->validate([
            
          'name'=>'required|string|max:20'
        ]);

        cat::create($data);
        return redirect (route('admin.index.cat'));
    }
    public function edit($id){
         $data['cat']=cat::findOrFail($id);
        return view ('front.admin.cats.edit')->with($data);
    }
      
    public function update(request $request, $id){

        $data=$request->validate([
            'name'=>'required|string|max:20'
        ]);
        cat::findOrFail($id)->update($data);
        return back();
    }

    public function delete($id){

        cat::findOrFail($id)->delete();
        return redirect (route('admin.index.cat'));
    }


















}
