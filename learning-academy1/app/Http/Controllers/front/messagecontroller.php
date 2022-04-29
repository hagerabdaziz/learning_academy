<?php

namespace App\Http\Controllers\front;
use App\Models\message;
use App\Models\student;
use App\Models\newsletter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class messagecontroller extends Controller
{
    public function newsletter(request $request){
          
     $data=$request->validate([

        'email' =>'required|email'
     ]);
      newsletter::create($data);
      return back();


    }
    public function contact(request $request){
          
        $data=$request->validate([
   
           'email' =>'required|email',
           'name' =>'required|string',
           'subject'=>'unllable|srting|max:191',
           'message' =>'required|string',

        ]);
         message::create($data);
         return back();
   
   
       }
       public function enroll(request $request){
          
         $data=$request->validate([
            'name' =>'required|string',
            'email' =>'required|email',
            'spec' =>'required|string',
            'courseid'=>'required|exists:courses,id'
         ]);

           $student= student::create([
          'name'=>$data['name'],
           'email'=>$data['email'],
           'spec'=>$data['spec']
           ]);
           $studentid=$student->id;
       
           DB::table('course_student')->insert([
           'Course_id'=>$data['courseid'],
            'student_id'=>$studentid,
'created_at'=>now(),
'updated_at'=>now()
           ]);
          return back();
    
    
        }
}
