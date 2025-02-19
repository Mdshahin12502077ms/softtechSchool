<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function session(){
        return $this->belongsTo(Session::class,'session_id','id');
    }
    public function course(){
        return $this->belongsTo(CourseModel::class,'course_id','id');
    }
}
