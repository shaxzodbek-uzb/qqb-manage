<?php
namespace QQB\Appeal\Services;

use QQB\Appeal\Repositories\AppealRepository;
use App\Http\Requests\AppealStore;

class AppealService {
    private $repo;

    public function __construct(AppealRepository $repo) {
        $this->repo = $repo;
    }
    public function store(AppealStore $request):array
    {
        $appeal = $this->repo->store($request);
        return $appeal;
    }
}