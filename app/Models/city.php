<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $table = 'cities';


    public function country(){
        return $this->belongsTo('App\Models\country');
    }


    public function locations(){
        return $this->hasMany('App\Models\location');
    }


}
