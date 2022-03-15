<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utility_property_feature extends Model
{
    use HasFactory;

    protected $table = 'utility_property_features';

    public function utility_data(){
        return $this->belongsTo('App\Models\utility_data');
    }
}
