<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialPerformance extends Model
{
   

    public function performanceAttributes()
    {
    	return $this->hasMany('App\PerformanceAttributes','performance_id');
    }
}
