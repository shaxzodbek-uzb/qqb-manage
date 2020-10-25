<?php

namespace QQB\Tariff\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TariffResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'tariffs';

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
            'value' => $this->value,
            'children' => TariffResource::collection($this->whenLoaded('tariffs')),
        ];
    }
}