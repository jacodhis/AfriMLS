<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class garage_carport extends Model
{
    use HasFactory;

    protected $table = 'garage_carports';

    public function property(){
        return $this->belongsTo('App\Models\property');
    }

}
