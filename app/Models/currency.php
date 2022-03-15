<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class currency extends Model
{
    use HasFactory;

    protected $table = 'currencies';

    protected $guarded = [];

    public function country(){
        return $this->belongsTo('App\Models\country');
    }

}
