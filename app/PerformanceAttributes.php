<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PerformanceAttributes extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'text'];

    protected $table = 'performance_attributes';

    public $timestamps = false;
}
