<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;

class Slide extends Model
{
    public function slider()
    {
        return $this->belongsTo(Slider::class);
    }
    public function image_file()
    {
        return $this->belongsTo(MediaModel::class, 'image', 'id');
    }
}
