<?php

namespace QQB\Deposit\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class DepositResource extends JsonResource
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
            'content' => $this->content,
            'description' => $this->description,
            'image' => $this->image_file?$this->image_file->url:'',
            'type' => new DepositTypeResource($this->whenLoaded('type')),
            'term' => $this->term,
            'rate' => $this->rate,
            'summ' => $this->summ,
            'created_at' => $this->created_at?
                $this->created_at->format('Y-m-d'):
                    ($this->update_at ? $this->update_at->format('Y-m-d') : now()->format('Y-m-d')),
            'updated_at' => $this->updated_at?
                $this->updated_at->format('Y-m-d H:i'): now()->format('Y-m-d H:i'),
        ];
    }
}