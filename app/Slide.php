<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;
use Spatie\Translatable\HasTranslations;

class Slide extends Model
{
	use HasTranslations;
    
    public $translatable = ['name' ,'description'];
    public $fillable = ['name', 'description', 'image'];

    public function slider()
    {
        return $this->belongsTo(Slider::class);
    }
    public function image_file()
    {
        return $this->belongsTo(MediaModel::class, 'image', 'id');
    }

}
