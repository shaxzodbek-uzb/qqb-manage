<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }

}
