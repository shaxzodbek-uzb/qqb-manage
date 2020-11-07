<?php

namespace QQB\Vacancy\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VacancyResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'bank-histories';

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
            'phones' => $this->phones,
            'email' => $this->email,
            'address' => $this->address,
            'requirements' => $this->requirements,
            'duties' => $this->duties,
            'created_at' => $this->created_at->format('Y-m-d H:i'),
        ];
    }
}