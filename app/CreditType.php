<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CreditType extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }
}
