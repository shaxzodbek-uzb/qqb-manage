<?php
namespace QQB\CurrencyRate\Services;

use QQB\CurrencyRate\Repositories\CurrencyRateRepository;

class CurrencyRateService {

    private $repo;

    public function __construct(CurrencyRateRepository $repo) {
        $this->repo = $repo;
    }
    public function getAll():array
    {
        $currency_rates = $this->repo->getAllWithCurrency();
        return $currency_rates;
    }
    public function getById($id):array
    {
        $currency_rate = $this->repo->getByIdWithCurrency($id);
        return $currency_rate;
    }

    public function getLast($limit = null):array
    {
        $currency_rate = $this->repo->getLastWithCurrency($limit);
        return $currency_rate;
    }
}