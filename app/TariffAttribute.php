<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TariffAttribute extends Model
{
    use HasTranslations;
    
    protected $table = 'tariff_attributes';
    public $translatable = ['attribute' ,'value'];
    public $timestamps = false;

}
