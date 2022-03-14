<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class community_feauture extends Model
{
    use HasFactory;

    // protected $table = 'community_feautures';


    public function community_feautures(){
        return $this->belongsTo('App\Models\feauture_community');
    }


}
