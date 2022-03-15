<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    protected $gurded = [];

    protected $table = 'countries';

    public function cities(){
        return $this->hasMany('App\Models\city');
    }
    public function currency(){
        return $this->hasOne('App\Models\currency');
    }
}
