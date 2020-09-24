<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Credit extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'description','content'];

	public function resource_details()
	{
		return $this->morphMany(ResourceDetail::class,'resource');
	}
	public function documents()
	{
		return $this->morphMany(Document::class,'resource');
	}

    public function faqs()
    {
        return $this->morphToMany(Faqs::class,'resource','resource_faqs');
    }
}
