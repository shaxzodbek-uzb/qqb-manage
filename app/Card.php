<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ResourceDetail;

class Card extends Model
{
	public function details()
	{
		return $this->morphMany(ResourceDetail::class,'resource_id');
	}
    
}
