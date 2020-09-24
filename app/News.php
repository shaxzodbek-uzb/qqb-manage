<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;
use Spatie\Translatable\HasTranslations;

class News extends Model
{

    use HasTranslations;
    
    public $translatable = ['name' ,'content', 'description'];
    public function image_file()
    {
        return $this->belongsTo(MediaModel::class, 'image', 'id');
    }

    public function news_category()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }

}
