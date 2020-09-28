<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasTranslations;
    
    public $translatable = ['name'];
    public function slides()
    {
        return $this->hasMany(Slide::class);
    }
}
