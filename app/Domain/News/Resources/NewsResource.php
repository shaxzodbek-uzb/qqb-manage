<?php

namespace QQB\News\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class NewsResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'news';

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
            'description' => $this->description,
            'content' => $this->content,
            'image' =>  $this->image_file?$this->image_file->url:'',
            'category' =>  new NewsCategoryResource($this->whenLoaded('news_category')),
            'created_at' => $this->created_at?
                $this->created_at->format('Y-m-d'):
                    ($this->update_at ? $this->update_at->format('Y-m-d') : now()->format('Y-m-d')),
        ];
    }
}