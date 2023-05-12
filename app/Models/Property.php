<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'properties';

    public function county(){
        return $this->belongsTo('App\Models\County');
    }
    public function city(){
        return $this->belongsTo('App\Models\City');
    }



    public function category(){
        return $this->belongsTo('App\Models\category');
    }
    public function option(){
        return $this->belongsTo('App\Models\option');
    }

    public function location(){
        return $this->belongsTo('App\Models\location');
    }

    public function garagefeatures(){
        return $this->hasMany('App\Models\garage_feauture');
    }

    public function garagecarports(){
        return $this->hasMany('App\Models\garage_carport');
    }

    public function community_feautures(){
        return $this->hasMany('App\Models\community_feauture');
    }

    public function exterior_property_feautures(){
        return $this->hasMany('App\Models\exterior_property_feauture');
    }

    public function utility_property_feautures(){
        return $this->hasMany('App\Models\utility_property_feature');
    }
    public function garage_property_feautures(){
        return $this->hasMany('App\Models\garage_property_feature');
    }
    public function wateraccess(){
        return $this->hasMany('App\Models\property');
    }
	//this method returns image to display on the homepage
	public function getPropertyImage(){
		$showImage = "https://imgs.search.brave.com/q0S9RCJHS77w3UbbflKz4WPPmt7p-v5staJ2vmRUi3o/rs:fit:1024:684:1/g:ce/aHR0cDovL3d3dy5y/ZWFsZXN0YXRlc3Ry/dWN0dXJlZC5jb20v/d3AtY29udGVudC91/cGxvYWRzLzIwMTgv/MDkvUmVhbC1Fc3Rh/dGUtaXMtdGhlLUJl/c3QtSW5kdXN0cnkt/VGhlcmUtaXMtMTAy/NHg2ODQuanBn";
		if(!empty($this->image)){
			$images = explode('|', $this->image);
			if(count($images) > 1){
				$showImage = $images[0];
			}else{
				$showImage = $this->image;
			}
		}
		return $showImage;
	}









}
