<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function Documenttype()
    {
        return $this->belongsTo(DocumentType::class,'type_id');
    }
}
