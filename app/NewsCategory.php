<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'news_category';
    
    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
