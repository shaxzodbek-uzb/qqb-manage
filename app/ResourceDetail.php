<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceDetail extends Model
{
    public function card()
    {
    	return $this->morphTo();
    }
}
