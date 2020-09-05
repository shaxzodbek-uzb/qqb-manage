<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Card;

class ResourceDetail extends Model
{
   /**
     * Get all of the posts that are assigned this tag.
     */
    public function cards()
    {
        return $this->morphedByMany(Card::class, 'resource_details');
    }
}
