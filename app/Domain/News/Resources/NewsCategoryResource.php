<?php

namespace QQB\News\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class NewsCategoryResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'news-categories';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $news = $this->whenLoaded('news');
        if($this->whenLoaded('limited_news'))
            $news = $this->whenLoaded('limited_news');
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'news' => NewsResource::collection($news),
        ];
    }
}