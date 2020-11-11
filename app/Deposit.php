<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;

class Deposit extends Model
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('active', function (Builder $builder) {
            $builder->where('active', true);
        });
    }

    use HasTranslations;
	public $translatable = ['name','description','content', 'term', 'rate', 'summ', 'type'];

	public function image_file()
    {
        return $this->belongsTo(MediaModel::class, 'image', 'id');
    }
    
}
