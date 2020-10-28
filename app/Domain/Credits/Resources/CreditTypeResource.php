<?php

namespace QQB\Credits\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CreditTypeResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'credit_types';

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
            'slug' => $this->slug,
            'credits' => CreditResource::collection($this->whenLoaded('credits')),
        ];
    }
}