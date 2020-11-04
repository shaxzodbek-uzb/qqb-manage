<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;
use Spatie\Translatable\HasTranslations;

class Gallery extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
    protected $casts = [
        'images' => 'array',
    ];
    
    public function get_medias()
    {
        return MediaModel::whereIn('id', $this->images)->get();
    }
}
