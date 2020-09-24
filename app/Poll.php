<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;
class Poll extends Model
{
	use HasTranslations;
    public $translatable = ['name'];
    public function poll_variants()
    {
    	 return $this->hasMany(PollVariant::class);
    }
}
