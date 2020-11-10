<?php
namespace QQB\Poll\Services;

use QQB\Poll\Repositories\PollRepository;

class PollService{
    private $repo;

    public function __construct(PollRepository $repo) {
        $this->repo = $repo;
    }

    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function update($request)
    {
        $poll = $this->repo->getChildById($request->poll_variant_id);
        // dd($request->poll_variant_id);
        $poll->increment('count');
        $poll->poll->increment('count');
        return $this->repo->getById($poll->poll_id);
    }
}