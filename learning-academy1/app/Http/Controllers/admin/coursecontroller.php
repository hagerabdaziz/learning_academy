<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use App\Models\Course;
use App\Models\cat;
use App\Models\trainer;
use Illuminate\Support\Facades\Storage;
use Image;


class coursecontroller extends Controller
{
    public function index(){
       
        $data['courses']= Course::select('id','name','smalldesc','desc','price','img')->orderBy('id','DESC')->get();
        return view ('front.admin.courses.index')->with($data);
     }
 
     public function create(){
        $data['trainers']= trainer::select('id','name')->get();
        $data['cats']= cat::select('id','name')->get();
         return view ('front.admin.courses.create')->with($data);
     }
 
     public function store(request $request){
 
         $data=$request->validate([
             
           'name'=>'required|string|max:20',
           'smalldesc'=>'required|string',
           'desc'=>'required|string',
           'price'=>'required|integer',
           'cat_id'=>'required|exists:cats,id',
           'trainer_id'=>'required|exists:trainers,id',
           'img'=>'required|image'

         ]);
        $newname=$data['img']->hashName(); 
        Image::make($data['img'])->resize(50,50)->save(public_path('uploads/Courses/'.$newname));
        $data['img']= $newname;
         Course::create($data);
         return redirect (route('admin.index.course'));
     }


     public function edit($id){
        $data['trainers']= trainer::select('id','name')->get();
        $data['cats']= cat::select('id','name')->get();
          $data['course']=Course::findOrFail($id);
         return view ('front.admin.courses.edit')->with($data);
     }
       
     public function update(request $request){
 
         $data=$request->validate([
            'name'=>'required|string|max:40',
            'smalldesc'=>'required|string',
            'desc'=>'required|string',
            'price'=>'required|integer',
            'cat_id'=>'required|exists:cats,id',
            'trainer_id'=>'required|exists:trainers,id',
            'img'=>'required|image'
 
         ]);
         $old_name=Course::findOrFail($request->id)->img;
         if($request->hasFile('img')){
            Storage::disk('uploads')->delete('Courses/'.$old_name);
            $newname=$data['img']->hashName(); 
            Image::make($data['img'])->resize(970,520)->save(public_path('uploads/Courses/'.$newname));
            $data['img']= $newname;
         }else{

            $data['img']=$old_name;
         }
         Course::findOrFail($request->id)->update($data);

         return back();
     }
 
     public function delete($id){
        $old_name=Course::findOrFail($id)->img;
        Storage::disk('uploads')->delete('Courses/'.$old_name);

        Course::findOrFail($id)->delete();
         return redirect (route('admin.index.course'));
     }
}


