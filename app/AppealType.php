<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations; 

class AppealType extends Model
{
    use HasTranslations;
    
    public $translatable = ['name', 'description'];
}
