<?php
namespace QQB\Page\Services;

use App\Http\Resources\Slider;
use QQB\BankHistory\Repositories\BankHistoryRepository;
use QQB\Branche\Repositories\BrancheRepository;
use QQB\Credits\Services\CreditService;
use QQB\Card\Repositories\CardRepository;
use QQB\Deposit\Repositories\DepositRepository;
use QQB\Faqs\Repositories\FaqsRepository;
use QQB\FinancialPerformance\Repositories\FinancialPerRepository;
use QQB\Menu\Repositories\MenuRepository;
use QQB\News\Repositories\NewsCategoryRepository;
use QQB\News\Repositories\NewsRepository;
use QQB\Page\Repositories\PageRepository;
use QQB\Poll\Repositories\PollRepository;
use QQB\Slider\Repositories\SliderRepository;
use QQB\Staff\Repositories\StaffRepository;
use QQB\Vacancy\Repositories\VacancyRepository;
use QQB\Documents\Services\DocumentService;
use QQB\Tariff\Services\TariffService;
use QQB\Deposit\Services\DepositService;

class PageService
{
    private $brancheRepo;
    private $bankHistoryRepo;
    private $creditRepo;
    private $depositRepo;
    private $faqsRepo;
    private $finperRepo;
    private $menuRepo;
    private $newsCategoryRepo;
    private $newsRepo;
    private $pageRepo;
    private $pollRepo;
    private $sliderRepo;
    private $staffRepo;
    private $vacancyRepo;

    public function __construct(
        BankHistoryRepository   $bankHistoryRepo,
        BrancheRepository       $brancheRepo,
        CardRepository          $cardRepo,
        DepositRepository       $depositRepo,
        FaqsRepository          $faqsRepo,
        FinancialPerRepository  $finperRepo,
        MenuRepository          $menuRepo,
        NewsCategoryRepository  $newsCategoryRepo,
        NewsRepository          $newsRepo,
        PageRepository          $pageRepo,
        PollRepository          $pollRepo,
        SliderRepository        $sliderRepo,
        StaffRepository         $staffRepo,
        VacancyRepository       $vacancyRepo
    )
    {
        $this->bankHistoryRepo = $bankHistoryRepo;
        $this->brancheRepo = $brancheRepo;
        $this->cardRepo = $cardRepo;
        $this->depositRepo = $depositRepo;
        $this->faqsRepo = $faqsRepo;
        $this->finperRepo = $finperRepo;
        $this->menuRepo = $menuRepo;
        $this->newsCategoryRepo = $newsCategoryRepo;
        $this->newsRepo = $newsRepo;
        $this->pageRepo = $pageRepo;
        $this->pollRepo = $pollRepo;
        $this->sliderRepo = $sliderRepo;
        $this->staffRepo = $staffRepo;
        $this->vacancyRepo = $vacancyRepo;
    }
    public function main(): array
    {
        //TODO use only services
        $slider = $this->sliderRepo->getByType('main');
        $slider_popular = $this->sliderRepo->getByType('popular-products');
        $cards = $this->cardRepo->getBestCards();
        $news_categories = $this->newsCategoryRepo->getAll();
        $main_news = $this->newsRepo->getLastMainNews()['main_news'];
        return [
            'slider' => $slider,
            'popular_products' => $slider_popular,
            'cards' => $cards['cards'],
            'news_categories' => $news_categories,
            'main_news' => $main_news,
            'last_update' => $this->getLastUpdate($this->newsRepo->getLastAdded())
        ];
    }
    public function getLastUpdate($news) {
        if(is_null($news)){
            return now()->format('Y-m-d H:i');
        }
        return $news->created_at? $news->created_at->format('Y-m-d H:i'):
            ($news->update_at ? $news->update_at->format('Y-m-d H:i') : now()->format('Y-m-d H:i'));
    }

    public function branches(): array
    {
        $allbranches = $this->brancheRepo->getAllBranches();
        return [
            "branches" => $allbranches,
        ];
    }

    public function bankHistories(): array
    {
        $bankHistories = $this->bankHistoryRepo->allHistories();
        return [
            'bankHistories' => $bankHistories,
        ];
    }

    public function staffs(): array
    {
        $staffs = $this->staffRepo->staffs();
        return [
            'staffs' => $staffs,
        ];
    }

    public function faqs(): array
    {
        $faqs = $this->faqsRepo->faqs();
        return [
            'faqs' => $faqs,
        ];
    }
    
    public function polls(): array
    {
        $polls = $this->pollRepo->polls();
        return [
            'polls' => $polls,
        ];
    }

    public function vacancies(): array
    {
        $vacancies = $this->vacancyRepo->vacancies();
        return [
            'vacancies' => $vacancies,
        ];
    }

    public function news(): array
    {
        $news = $this->newsRepo->getAll();
        return [
            'news' => $news,
        ];
    }

    public function pageModel($slug): array
    {
        return $this->pageRepo->getBySlug($slug);
    }

    public function dataFor(string $page):array
    {
        switch ($page) {
            case 'main':
                return $this->main();
            case 'cards':
                return $this->cards();
            case 'branches':
                return $this->branches();
            case 'bank-histories':
                return $this->bankHistories();
            case 'deposits':
                return(new DepositService())->getDataForPage();
            case 'staffs':
                return $this->staffs();
            case 'faqs':
                return $this->faqs();
            case 'documents':
                return (new DocumentService)->getDataForPage();
            case 'tariffs':
                return (new TariffService)->getDataForPage();
            case 'polls':
                return $this->polls();
            case 'vacancies':
                return $this->vacancies();
            case 'news':
                return $this->news();
            case 'credits':
                return (new CreditService)->getDataForPage();
            default:
                return $this->pageModel($page);
            break;
        }
    }
}
