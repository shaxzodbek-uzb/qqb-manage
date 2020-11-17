<?php

namespace QQB\CashMachine\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use QQB\Branche\Resources\BrancheResource;

class CashMachineResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'cards';

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
            'address' => $this->address,
            'position' => $this->position,
            'branche' => new BrancheResource($this->whenLoaded('branche')),
        ];
    }
}