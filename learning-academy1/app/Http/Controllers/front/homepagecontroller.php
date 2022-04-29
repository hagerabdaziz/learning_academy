<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\trainer;
use App\Models\student;
use App\Models\cat;

class homepagecontroller extends Controller
{
    public function index(){
      $data['Courses']=Course::select('id','trainer_id','smalldesc','price','img','name','cat_id')
      ->orderBy('id','desc')
      ->take(3)->get();

      $data['CourseCount']=Course::count();
      $data['trainerCount']=trainer::count();
      $data['studentCount']=student::count();

        return view('front.index')->with( $data);
    }
}
