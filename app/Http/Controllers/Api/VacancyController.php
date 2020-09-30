<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vacancies;

class VacancyController extends Controller
{
     public function show($id)
    {
    	$vacancy = Vacancies::find($id);

    	return $vacancy;
    }
}
