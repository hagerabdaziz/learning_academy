<?php
namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Models\trainer;
use App\Models\cat;

use App\Models\Course;

use App\Http\Controllers\Controller;

class coursepagecontroller extends Controller
{
    public function cat($id){
    $data['cat']=cat::findOrFail($id);
    $data['courses']=Course::where('cat_id',$id)->paginate(3);
    $data['trainer']=trainer::select('id','name')->get();
    return view('front.courses.cat')->with( $data);

    }

    public function show($id,$cid){
        $data['course']=Course::findOrFail($cid);     
        return view('front.courses.show')->with( $data);
    
        }

   public function contact(){
    return view('front.courses.contact');

   }

}
