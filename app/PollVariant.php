<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PollVariant extends Model
{
	use HasTranslations;
    public $translatable = ['name'];

   public $timestamps = false;
}
