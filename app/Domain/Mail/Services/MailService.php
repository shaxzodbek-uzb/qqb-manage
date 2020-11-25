<?php
namespace QQB\Mail\Services;

use App\News;
use App\Jobs\SendNewsEmailJob;
use App\Mail\NewsCreated;
use QQB\Subscriber\Repositories\SubscriberRepository;
use Illuminate\Support\Facades\Mail;

class MailService {
    
    private $subscriberRepository;

    public function __construct(SubscriberRepository $subscriberRepository) {
        $this->subscriberRepository = $subscriberRepository;
    }

    public function sendNews(News $news)
    {
        $emails = $this->subscriberRepository->getEmails();
        foreach ($emails as $email) {
            Mail::to($email)->queue(new NewsCreated($news));
        }
    }
}