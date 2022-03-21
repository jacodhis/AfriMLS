<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class garage_property_feature extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'garage_property_features';

    public function exterior_feautures(){
        return $this->belongsTo('App\Models\garage_feauture');
    }
}
