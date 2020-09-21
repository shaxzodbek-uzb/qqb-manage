<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ClassicO\NovaMediaLibrary\Core\Model as MediaModel;

class Card extends Model //implements HasMedia
{

    public function image_file()
    {
        return $this->belongsTo(MediaModel::class, 'image', 'id');
    }
    
    public function cover_image_file()
    {
        return $this->belongsTo(MediaModel::class, 'cover_image', 'id');
    }
    
    public function resource_details()
	{
		return $this->morphMany(ResourceDetail::class,'resource');
	}
    
    public function documents()
	{
		return $this->morphMany(Document::class,'resource');
    }
    
	public function advantages()
	{
		return $this->morphMany(Advantage::class,'resource');
	}

    public function faqs()
    {
        return $this->morphToMany(Faqs::class,'resource','resource_faqs');
    }
    
}
