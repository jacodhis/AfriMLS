<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'properties';

    public function county(){
        return $this->belongsTo('App\Models\county');
    }

    public function category(){
        return $this->belongsTo('App\Models\category');
    }
    public function option(){
        return $this->belongsTo('App\Models\option');
    }

    public function location(){
        return $this->belongsTo('App\Models\location');
    }


    public function feautures(){
        return $this->hasMany('App\Models\feauture');
    }

    public function descriptions(){
        return $this->hasMany('App\Models\description');
    }

}
