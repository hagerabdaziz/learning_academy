<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\trainer;
use Illuminate\Support\Facades\Storage;

use Image;
class trainercontroller extends Controller
{
    public function index(){

        $data['trainers']= trainer::select('id','name','phone','spec','img')->orderBy('id','DESC')->get();
        return view ('front.admin.trainers.index')->with($data);
     }
 
     public function create(){
 
         return view ('front.admin.trainers.create');
     }
 
     public function store(request $request){
 
         $data=$request->validate([
             
           'name'=>'required|string|max:20',
           'phone'=>'required|string',
           'spec'=>'required|string',
           'img'=>'required|image'

         ]);
        $newname=$data['img']->hashName(); 
        Image::make($data['img'])->resize(50,50)->save(public_path('uploads/trainers/'.$newname));
        $data['img']= $newname;
         trainer::create($data);
         return redirect (route('admin.index.trainer'));
     }


     public function edit($id){
          $data['trainer']=trainer::findOrFail($id);
         return view ('front.admin.trainers.edit')->with($data);
     }
       
     public function update(request $request){
 
         $data=$request->validate([
             'name'=>'required|string|max:20',
             'phone'=>'required|string',
             'spec'=>'required|string',
             'img'=>'required|image'
         ]);
         $old_name=trainer::findOrFail($request->id)->img;
         if($request->hasFile('img')){
            Storage::disk('uploads')->delete('trainers/'.$old_name);
            $newname=$data['img']->hashName(); 
            Image::make($data['img'])->resize(50,50)->save(public_path('uploads/trainers/'.$newname));
            $data['img']= $newname;
         }else{

            $data['img']=$old_name;
         }
         trainer::findOrFail($request->id)->update($data);
         return back();
     }
 
     public function delete($id){
        $old_name=trainer::findOrFail($id)->img;
        Storage::disk('uploads')->delete('trainers/'.$old_name);

         trainer::findOrFail($id)->delete();
         return redirect (route('admin.index.trainer'));
     }
}
