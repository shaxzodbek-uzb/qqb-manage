<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public function poll_variants()
    {
    	 return $this->hasMany(PollVariant::class);
    }
}
