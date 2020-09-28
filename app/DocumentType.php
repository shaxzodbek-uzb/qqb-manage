<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class DocumentType extends Model
{
	use HasTranslations;

	public $translatable = ['name'];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
