<?php
namespace QQB\Appeal\Services;

use QQB\Appeal\Repositories\AppealRepository;
use QQB\Appeal\Repositories\AppealTypeRepository;
use App\Http\Requests\AppealStore;

class AppealService {
    private $repo;
    private $typeRepository;

    public function __construct(AppealRepository $repo, AppealTypeRepository $typeRepository) {
        $this->repo = $repo;
        $this->typeRepository = $typeRepository;
    }

    public function getAllTypes():array
    {
        $appealTypes = $this->typeRepository->getAll();
        return $appeal;
    }

    public function store(AppealStore $request):array
    {
        $appeal = $this->repo->store($request);
        return $appeal;
    }

}