<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ResourceDetail;
use Spatie\MediaLibrary\Media;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
 use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Card extends Model //implements HasMedia
{
	//use HasMediaTrait;
	public function registerMediaConversions(Media $media = null)
	{
	    $this->addMediaConversion('thumb')
	        ->width(130)
	        ->height(130);
	}

	public function registerMediaCollections()
	{
	    $this->addMediaCollection('main')->singleFile();
	}


	public function resource_details()
	{
		return $this->morphMany(ResourceDetail::class,'resource');
	}
    
}
