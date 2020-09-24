<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class VacancyDetail extends Model
{
    use HasTranslations;
    
    public $fillable = ['name_detail', 'text_detail'];
    public $translatable = ['name_detail', 'text_detail'];
}
