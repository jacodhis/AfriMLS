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
    public function city(){
        return $this->belongsTo('App\Models\city');
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

    public function garagefeatures(){
        return $this->hasMany('App\Models\garage_feauture');
    }

    public function garagecarports(){
        return $this->hasMany('App\Models\garage_carport');
    }

    public function community_feautures(){
        return $this->hasMany('App\Models\community_feauture');
    }

    public function exterior_property_feautures(){
        return $this->hasMany('App\Models\exterior_property_feauture');
    }

    public function utility_property_feautures(){
        return $this->hasMany('App\Models\utility_property_feature');
    }
    public function garage_property_feautures(){
        return $this->hasMany('App\Models\garage_property_feature');
    }








}
