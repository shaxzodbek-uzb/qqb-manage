<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function slide()
    {
        return $this->belongsTo(Slider::class);
    }
}
