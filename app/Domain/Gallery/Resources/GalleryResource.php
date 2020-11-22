<?php

namespace QQB\Gallery\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class GalleryResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'deposit_types';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        return [
            'id' => $this->id,
            'name' => $this->name,
            'images' => $this->get_medias(),
            'created_at' => $this->created_at?
                $this->created_at->format('Y-m-d'):
                    ($this->update_at ? $this->update_at->format('Y-m-d') : now()->format('Y-m-d')),
        ];
    }
}