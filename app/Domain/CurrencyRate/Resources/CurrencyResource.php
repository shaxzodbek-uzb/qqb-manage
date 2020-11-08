<?php

namespace QQB\CurrencyRate\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class CurrencyResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'currencies';

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
            'symbol' => $this->symbol,
            'logo' => url(Storage::url($this->image)),
            'sell_rate' => $this->whenPivotLoaded('currency_rate_currency', function () {
                return $this->pivot->sell_rate;
            }),
            'buy_rate' => $this->whenPivotLoaded('currency_rate_currency', function () {
                return $this->pivot->buy_rate;
            }),
            'cb_rate' => $this->whenPivotLoaded('currency_rate_currency', function () {
                return $this->pivot->cb_rate;
            }),
        ];
    }
}