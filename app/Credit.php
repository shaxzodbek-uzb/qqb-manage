<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;
use Spatie\Translatable\HasTranslations;

class Credit extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'description','content', 'grace_period', 'term', 'amount'];

	public function resource_details()
	{
		return $this->morphMany(ResourceDetail::class,'resource');
	}
	public function documents()
	{
		return $this->morphMany(Document::class,'resource');
	}

    public function faqs()
    {
        return $this->morphToMany(Faqs::class,'resource','resource_faqs');
    }

    public function image_file()
    {
        return $this->belongsTo(MediaModel::class, 'image', 'id');
    }
    public function credit_type()
    {
        return $this->belongsTo(CreditType::class, 'type_id', 'id');
    }
}
