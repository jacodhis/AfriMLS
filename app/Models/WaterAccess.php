<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterAccess extends Model
{
    use HasFactory;

    public function properties(){
        return $this->belongsTo('App\Models\property');
    }
}
