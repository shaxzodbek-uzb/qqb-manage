<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    public function vacancy_details()
    {
    	 return $this->hasMany(VacancyDetail::class,'vacancy_id');
    }
}
