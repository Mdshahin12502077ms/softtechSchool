<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BranchDetails;

class Branch extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function division(){
        return $this->belongsTo(Division::class,'division_id','id');
    }

    public function branch_subscription(){
        return $this->hasMany(BranchSubscription::class,'branch_id','id')->with('branch_details');
    }

    public function district(){
        return $this->belongsTo(District::class,'district_id','id');
    }

    public function branch_details(){

        return $this->hasMany(BranchDetails::class,'branch_id','id');

    }
}
