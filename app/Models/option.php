<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'options';

    public function properties(){
        return $this->hasMany('App\Models\property');
    }
}
