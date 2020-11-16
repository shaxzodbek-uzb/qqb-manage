<?php

namespace QQB\FinancialPerformance\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FinancialPerformanceResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'financial-performances';

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
            'definition' => $this->definition,
            'attributes' => PerformanceAttributeResource::collection($this->whenLoaded('performanceAttributes'))
        ];
    }
}