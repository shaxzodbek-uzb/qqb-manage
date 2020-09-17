<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrencyRate extends Model
{
    protected $dates = [
        'date',
    ];
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
