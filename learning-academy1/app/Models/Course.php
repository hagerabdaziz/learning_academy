<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    protected $guarded =['id'];

    public function trainer (){
        return $this->belongsto('App\Models\trainer');
    }
    public function cat (){
        return $this->belongsto('App\Models\cat');
   }
 

     function students(){
        $this->belongsToMany('App\Models\student');
    }

}
