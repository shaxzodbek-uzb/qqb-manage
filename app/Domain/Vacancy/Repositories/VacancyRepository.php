<?php 

namespace QQB\Vacancy\Repositories;

use Illuminate\Support\Collection;
use QQB\Vacancy\Resources\VacancyResource;
use App\Vacancies as Vacancy;

class VacancyRepository
{

    protected $vacancies;
    public function __construct(Vacancy $vacancies)
    {
        $this->vacancies = $vacancies;
    }

    public function getAll()
    {
        $vacancies = $this->vacancies->all();
        return ['vacancies' => VacancyResource::collection($vacancies)];
    }

    public function getById($id)
    {
        $vacancy = $this->vacancies->find($id);
        return ['vacancy' => new VacancyResource($vacancy)];
    }

}
