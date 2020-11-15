<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;

class News extends Model
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('orderBy', function (Builder $builder) {
            $builder->orderBy('id', 'desc');
        });
    }
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
