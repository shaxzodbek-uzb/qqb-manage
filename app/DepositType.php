<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class DepositType extends Model
{
    use HasTranslations;
    protected $translatable = ['name'];
}
