<?php

namespace QQB\Deposit\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class DepositTypeResource extends JsonResource
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
            'slug' => $this->slug,
            'deposits' => DepositResource::collection($this->whenLoaded('deposits'))
        ];
    }
}