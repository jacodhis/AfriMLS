<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class garage_feauture extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'garage_feautures';

    public function property(){
        return $this->belongsTo('App\Models\property');
    }

}
