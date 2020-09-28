<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Branche extends Model
{
    use HasTranslations;

    public $translatable = ['region','director','address'];
}
