<?php

namespace QQB\Branche\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrancheResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'branches';

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
            'region' => $this->region,
            'director' => $this->director,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'lat' => $this->lat,
            'long' => $this->long,
            'work_days' => $this->work_days,
            'additional_phone' => $this->additional_phone,
            'mfo' => $this->mfo,
        ];
    }
}