<?php

namespace QQB\CurrencyRate\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyRateResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'currency_rates';

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
            'date' => $this->date,
            'avtive' => $this->avtive,
            'currencies' => CurrencyResource::collection($this->whenLoaded('currencies'))
        ];
    }
}