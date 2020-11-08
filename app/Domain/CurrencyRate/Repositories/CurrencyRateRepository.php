<?php
namespace QQB\CurrencyRate\Repositories;

use App\CurrencyRate;
use QQB\CurrencyRate\Resources\CurrencyRateResource;

class CurrencyRateRepository
{
    private $currency_rates;
    
    public function __construct(CurrencyRate $currency_rates) {
        $this->currency_rates = $currency_rates;
    }

    public function getAllWithCurrency(): array
    {
        return ['currency_rates' => CurrencyRateResource::collection($this->currency_rates->with('currencies')->all())];
    }
    public function getByIdWithCurrency($id): array
    {
        return ['currency_rate' => new CurrencyRateResource($this->currency_rates->with('currencies')->find($id))];
    }
    public function getLastWithCurrency(): array
    {
        // dd($this->currency_rates->with('currencies')->latest()->first());
        return ['currency_rates' => new CurrencyRateResource($this->currency_rates->with('currencies')->latest()->first())];
    }
}