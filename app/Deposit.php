<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;
use Spatie\Translatable\HasTranslations;

class Deposit extends Model
{

    use HasTranslations;
	public $translatable = ['name','description','content', 'term', 'rate', 'summ', 'type'];

	public function image_file()
    {
        return $this->belongsTo(MediaModel::class, 'image', 'id');
    }
    
}
