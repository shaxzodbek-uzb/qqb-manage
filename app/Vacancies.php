<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Vacancies extends Model
{
	use HasTranslations;
    
    public $translatable = ['name' ,'region', 'address'];
    public function vacancy_details()
    {
    	 return $this->hasMany(VacancyDetail::class,'vacancy_id');
    }
}
