<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations; 

class BankHistory extends Model
{
    use HasTranslations;
    
	protected $table = 'bank_histories';
    protected $fillable = ['year','description'];
    public $translatable = ['description'];
}
