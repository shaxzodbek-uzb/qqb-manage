<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankHistory extends Model
{
	protected $table = 'bank_histories';
    protected $fillable = ['year','description'];
}
