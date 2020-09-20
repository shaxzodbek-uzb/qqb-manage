<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $casts = [
        'release_date' => 'datetime'
    ];
    public function document_type()
    {
        return $this->belongsTo(DocumentType::class,'type_id');
    }
}
