<?php
namespace QQB\CurrencyRate\Repositories;

use App\CurrencyRate;
use QQB\CurrencyRate\Resources\CurrencyRateResource;
use Carbon\Carbon;
class CurrencyRateRepository
{
    private $currency_rates;
    
    public function __construct(CurrencyRate $currency_rates) {
        $this->currency_rates = $currency_rates;
    }

    public function getAllWithCurrency(): array
    {
        return ['currency_rates' => CurrencyRateResource::collection($this->currency_rates->with('currencies')->orderBy('currencies.value')->all())];
    }
    public function getByIdWithCurrency($id): array
    {
        return ['currency_rate' => new CurrencyRateResource($this->currency_rates->with('currencies')->find($id))];
    }
    public function getLastWithCurrency($limit): array
    {
        $date = now();
        if($limit)
            $date = new Carbon($limit);
        $prev_currency_rate = $this->currency_rates->with('currencies')->where('date', "<=", $date)->latest('date')->skip(1)->first();
        
        $currency_rate = $this->currency_rates->with('currencies')->where('date', "<=", $date)->latest('date')->first();
        if ($currency_rate)
            $currency_rate = new CurrencyRateResource($currency_rate);
        else
            $currency_rate = [];
        if ($prev_currency_rate)
            $prev_currency_rate = new CurrencyRateResource($prev_currency_rate);
        else
            $prev_currency_rate = [];
        return ['currency_rate' => $currency_rate,'prev_currency_rate' => $prev_currency_rate];
    }
}