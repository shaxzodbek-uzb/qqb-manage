<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class NewsCategory extends Model
{
	use HasTranslations;
	public $translatable = ['name','description'];
    protected $table = 'news_category';

    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
