<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $guarded = [];


    public function country(){
        return $this->belongsTo('App\Models\country');
    }

    public function properties(){
        return $this->hasMany('App\Models\property');
    }


    public function locations(){
        return $this->hasMany('App\Models\location');
    }


}
