<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Staff extends Model
{
    use HasTranslations;

    public $translatable = ['fulname','meta'];
}
