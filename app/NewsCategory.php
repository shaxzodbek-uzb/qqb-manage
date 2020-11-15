<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class NewsCategory extends Model
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
	public $translatable = ['name','description'];
    protected $table = 'news_category';

    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
