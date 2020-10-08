<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Currency extends Model
{
    use HasTranslations;

    public $translatable = ['name'];
    
    public function rates()
    {
        return $this->hasMany(CurrencyRate::class);
    }
}
