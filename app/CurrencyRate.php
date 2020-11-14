<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrencyRate extends Model
{
    protected $dates = [
        'date',
    ];
    public function currencies()
    {
        return $this->belongsToMany(Currency::class, 'currency_rate_currency', 'currency_rate_id', 'currency_id')->withPivot(["sell_rate", 'buy_rate', 'cb_rate'])->orderBy('currencies.value');
    }
}
