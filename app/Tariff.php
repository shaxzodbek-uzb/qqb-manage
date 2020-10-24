<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Tariff extends Model
{

	use HasTranslations;
    public $translatable = ['name', 'value'];
	protected $table = 'tariffs';

	public function tariffs()
    {
        return $this->hasMany(Tariff::class,'parent_id');
    }
    public function type()
    {
        return $this->belongsTo(TariffType::class, 'type_id');
    }
}
