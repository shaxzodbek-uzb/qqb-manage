<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CashMachine extends Model
{
    use HasTranslations;
    public $translatable = ['address', 'position'];
    public function branche()
    {
        return $this->belongsTo(Branche::class);
    }
}
