<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FinancialPerformance extends Model
{
   	use HasTranslations;

    public $translatable = ['year', 'definition'];

    public function performanceAttributes()
    {
    	return $this->hasMany('App\PerformanceAttributes','performance_id')->orderByAsc('order');
    }
}
