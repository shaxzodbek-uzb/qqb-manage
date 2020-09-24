<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Card;
use Spatie\Translatable\HasTranslations;


class ResourceDetail extends Model
{

	use HasTranslations;
	
    public $translatable = ['name','text'];

    public function cards()
    {
        return $this->morphedByMany(Card::class, 'resource_details');
    }
}
