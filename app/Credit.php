<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    
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
        return $this->morphToMany(Faqs::class, 'resource');
    }
}
