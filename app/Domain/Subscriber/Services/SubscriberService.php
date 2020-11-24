<?php
namespace QQB\Subscriber\Services;

use QQB\Subscriber\Repositories\SubscriberRepository;

class SubscriberService {

    private $repo;

    public function __construct(SubscriberRepository $repo) {
        $this->repo = $repo;
    }

    public function store($request): array
    {
        return $this->repo->store($request->all());
    }
}