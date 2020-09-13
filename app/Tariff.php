<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
	protected $table = 'tariffs';

    // public function attributes()
    // {
    // 	return $this->belongsToMany('App\TariffAttribute','tariff_attributes', 'tariff_id','id');
    // }
     public function tariff_attributes()
    {
    	 return $this->hasMany(TariffAttribute::class,'tariff_id');
    }
}
