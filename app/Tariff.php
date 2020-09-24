<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Tariff extends Model
{

	use HasTranslations;
    public $translatable = ['name'];
	protected $table = 'tariffs';

	public function tariff_attributes()
    {
    	 return $this->hasMany(TariffAttribute::class,'tariff_id');
    }
}
