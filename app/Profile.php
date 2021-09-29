<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    //
    public static $rules = array(
        'name'=>'required',
        'gender'=>'required|in:男,女',
        'hobby'=>'required',
        'introduction'=>'required',
        );
}
