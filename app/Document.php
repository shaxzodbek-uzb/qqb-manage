<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;

class Document extends Model
{
	use HasTranslations;
	public $translatable = ['name'];
    protected $casts = [
        'release_date' => 'datetime'
    ];
    public function document_type()
    {
        return $this->belongsTo(DocumentType::class,'type_id');
    }
    public function document_file()
    {
        return $this->belongsTo(MediaModel::class, 'document', 'id');
    }
    
}
