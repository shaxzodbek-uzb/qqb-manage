<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\Vacancy\Services\VacancyService;


class VacancyController extends Controller
{
    private $service;

    public function __construct(VacancyService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $vacancies = $this->service->getAll();
        
    	return response()->json([
            'success' => true,
            'data' => $vacancies
        ]);
    }

    public function show($id)
    {
        $vacancy = $this->service->getById($id);

    	return response()->json([
            'success' => true,
            'data' => $vacancy
        ]);
    }
}
