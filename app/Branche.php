<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Branche extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'region', 'director', 'address', 'work_days', 'additional_phone', 'mfo'];
    public function cash_machines()
    {
        return $this->hasMany(CashMachine::class);
    }
}
