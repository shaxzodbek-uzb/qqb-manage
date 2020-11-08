<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;

class Staff extends Model
{
    use HasTranslations;

    public $translatable = ['fulname','meta', 'position', 'confirmation_document'];
    
    public function avatar_file()
    {
        return $this->belongsTo(MediaModel::class, 'avatar', 'id');
    }
}
