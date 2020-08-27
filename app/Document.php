<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function type()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
