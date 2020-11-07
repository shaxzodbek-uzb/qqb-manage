<?php

namespace QQB\BankHistory\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BankHistoryResource extends JsonResource
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
            'year' => $this->year,
            'description' => $this->description,
        ];
    }
}