<?php 

namespace QQB\Vacancy\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\Vacancies as Vacancy;

class VacancyRepository
{
	use ResponsibleTrait;

    protected $vacancies;
    public function __construct(Vacancy $vacancies)
    {
        $this->vacancies = $vacancies;
    }

    public function vacancies()
    {
    	$vacancies = $this->vacancies->all();
    	return $this->transform($vacancies);

    }

     public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'region' => $item->region,
            'phones' => $item->phones,
            'email' => $item->email,
            'address' => $item->address,
            'vacancy_details' => $item->vacancy_details
        ];
    }
}
