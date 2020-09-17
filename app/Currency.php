<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function rates()
    {
        return $this->hasMany(CurrencyRate::class);
    }
}
