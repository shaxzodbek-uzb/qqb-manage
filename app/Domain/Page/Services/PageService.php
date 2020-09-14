<?php
namespace QQB\Page\Services;

use QQB\Slider\Repositories\SliderRepository;
use QQB\Card\Repositories\CardRepository;
use QQB\News\Repositories\NewsRepository;

class PageService
{
    private $sliderRepo;
    private $cardRepo;
    private $newsRepo;

    public function __construct(
        SliderRepository $sliderRepo,
        CardRepository $cardRepo,
        NewsRepository $newsRepo
    )
    {
        $this->sliderRepo = $sliderRepo;
        $this->cardRepo = $cardRepo;
        $this->newsRepo = $newsRepo;
    }
    public function main(): array
    {
        $slider = $this->sliderRepo->getAll('main');
        $cards = $this->cardRepo->getBestCards();
        $news = $this->newsRepo->getAll();
        return [
            'slider' => $slider,
            'cards' => $cards,
            'news' => $news
        ];
    }
    public function dataFor(string $page):array
    {
        switch ($page) {
            case 'main':
                return $this->main();
            
            default:
                # code...
                break;
        }
    }
}
