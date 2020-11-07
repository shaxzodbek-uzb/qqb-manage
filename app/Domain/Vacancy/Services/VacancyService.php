<?php
namespace QQB\Vacancy\Services;

use QQB\Vacancy\Repositories\VacancyRepository;

class VacancyService {
    private $repo;

    public function __construct(VacancyRepository $repo) {
        $this->repo = $repo;
    }
    public function getAll(): array
    {
        $vacancies = $this->repo->getAll();
        return $vacancies;
    }
    public function getById($id): array
    {
        $vacancies = $this->repo->getById($id);
        return $vacancies;
    }
}
