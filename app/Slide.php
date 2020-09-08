<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function slides()
    {
        return $this->belongsTo(Slider::class);
    }
}
