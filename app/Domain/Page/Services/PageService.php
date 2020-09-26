<?php
namespace QQB\Page\Services;

use QQB\News\Repositories\NewsCategoryRepository;
use QQB\News\Repositories\NewsRepository;
use QQB\Slider\Repositories\SliderRepository;
use QQB\Card\Repositories\CardRepository;
use App\Http\Resources\Slider;
use QQB\Menu\Repositories\MenuRepository;
use QQB\Branche\Repositories\BrancheRepository;
use QQB\BankHistory\Repositories\BankHistoryRepository;
use QQB\Deposit\Repositories\DepositRepository;
use QQB\Staff\Repositories\StaffRepository;
use QQB\Faqs\Repositories\FaqsRepository;
use QQB\FinancialPerformance\Repositories\FinancialPerRepository;
use QQB\Documents\Repositories\DocumentRepository;
use QQB\Poll\Repositories\PollRepository;
use QQB\Tariff\Repositories\TariffRepository;
use QQB\Vacancy\Repositories\VacancyRepository;
use QQB\Credits\Repositories\CreditRepository;

class PageService
{
    private $sliderRepo;
    private $cardRepo;
    private $newsRepo;
    private $newsCategoryRepo;
    private $menuRepo;
    private $depositRepo;
    private $faqsRepo;
    private $finperRepo;
    private $docRepo;
    private $pollRepo;
    private $tariffRepo;
    private $vacancyRepo;
    private $creditRepo;

    public function __construct(
        SliderRepository $sliderRepo,
        CardRepository $cardRepo,
        BrancheRepository $brancheRepo,
        NewsCategoryRepository $newsCategoryRepo,
        NewsRepository $newsRepo,
        MenuRepository $menuRepo,
        BankHistoryRepository $bankHistoryRepo,
        DepositRepository $depositRepo,
        StaffRepository $staffRepo,
        FinancialPerRepository $finperRepo,
        FaqsRepository $faqsRepo,
        PollRepository $pollRepo,
        TariffRepository $tariffRepo,
        DocumentRepository $docRepo,
        VacancyRepository $vacancyRepo,
        CreditRepository $creditRepo
    )
    {
        $this->sliderRepo = $sliderRepo;
        $this->cardRepo = $cardRepo;
        $this->brancheRepo = $brancheRepo;
        $this->newsCategoryRepo = $newsCategoryRepo;
        $this->newsRepo = $newsRepo;
        $this->menuRepo = $menuRepo;
        $this->bankHistoryRepo = $bankHistoryRepo;
        $this->depositRepo = $depositRepo;
        $this->staffRepo = $staffRepo;
        $this->finperRepo = $finperRepo;
        $this->faqsRepo = $faqsRepo;
        $this->docRepo = $docRepo;
        $this->pollRepo = $pollRepo;
        $this->tariffRepo = $tariffRepo;
        $this->vacancyRepo = $vacancyRepo;
        $this->creditRepo = $creditRepo;
    }
    public function main(): array
    {
        //TODO use only services
        $slider = $this->sliderRepo->getByType('main');
        $cards = $this->cardRepo->getBestCards();
        $news_categories = $this->newsCategoryRepo->getAll();
        return [
            'slider' => $slider,
            'cards' => $cards,
            'news_categories' => $news_categories
        ];
    }

    public function cards(): array
    {
        $allcards = $this->cardRepo->getAllCards();
        return [
            "cards" => $allcards,
        ];
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


    public function documents(): array
    {
        $documents = $this->docRepo->documents();
        return [
            'documents' => $documents,
        ];
    }

    public function deposits(): array
    {
        $deposits = $this->depositRepo->deposits();
        return [
            'deposits' => $deposits,
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

    public function finPer(): array
    {
        $finPer = $this->finperRepo->financialPerformance();
        return [
            'finPer' => $finPer,
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

    public function credits(): array
    {
        $credits = $this->creditRepo->getAll();
        return [
            'credit' => $credits,
        ];
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
                return $this->deposits();
            case 'staffs':
                return $this->staffs();
            case 'faqs':
                return $this->faqs();
            case 'financial-performance':
                return $this->finPer();
            case 'documents':
                return $this->documents();
            case 'polls':
                return $this->polls();
            case 'vacancies':
                return $this->vacancies();
            case 'news':
                return $this->news();
            case 'credits':
                return $this->credits();
            default:
                # code...`
                break;
        }
    }
}
