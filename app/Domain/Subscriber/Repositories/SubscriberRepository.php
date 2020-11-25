<?php
namespace QQB\Subscriber\Repositories;

use App\Subscriber;
use QQB\Subscriber\Resources\SubscriberResource;

class SubscriberRepository {
    
    private $subscribers;

    public function __construct(Subscriber $subscribers) {
        $this->subscribers = $subscribers;
    }

    public function store(array $params): array
    {
        $subscriber = $this->subscribers->where('email', $params['email'])->first();
        if (!$subscriber)
            $subscriber = $this->subscribers->create($params);
        return [ 'subscribers' => new SubscriberResource($subscriber) ];
    }
    public function getEmails(): array
    {
        return $this->subscribers->pluck('email')->toArray();
    }
}