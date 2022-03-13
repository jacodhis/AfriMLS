<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class description extends Model
{
    use HasFactory;

    protected $table = 'descriptions';

    public function property(){
        return $this->belongsTo('App\Models\property');
    }
}
