<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exterior_property_feauture extends Model
{
    use HasFactory;
    protected $table= 'exterior_property_feautures';
    protected $guarded = [];

    public function exterior_feautures(){
        return $this->belongsTo('App\Models\exterior_feauture');
    }
}
