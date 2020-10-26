<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;
use Spatie\Translatable\HasTranslations;

class Advantage extends Model
{
    use HasTranslations;
    public $translatable = ['name','text_advantage'];
    
    public function icon_file()
    {
        return $this->belongsTo(MediaModel::class, 'icon_image', 'id');
    }
}
