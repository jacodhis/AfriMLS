<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;

    protected  $table= 'locations';

    public function city(){
        return $this->belongsTo('App\Models\city');
    }

    public function properties(){
        return $this->hasMany('App\Models\property');
    }


}
