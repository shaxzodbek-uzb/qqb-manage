<?php

namespace QQB\Credits\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use QQB\ResourceDetail\Resources\ResourceDetailResource;
use QQB\Documents\Resources\DocumentResource;
use QQB\Faqs\Resources\FaqsResource;

class CreditResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'credits';

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
            'image' => $this->image_file?$this->image_file->url:'',
            'description' => $this->description,
            'content' => $this->content,
            'grace_period' => $this->grace_period,
            'term' => $this->term,
            'amount' => $this->amount,
            'resource_details' => ResourceDetailResource::collection($this->whenLoaded('resource_details')),
            'documents' => DocumentResource::collection($this->whenLoaded('documents')),
            'faqs' => FaqsResource::collection($this->whenLoaded('faqs')),
            'credit_type' => new CreditTypeResource($this->whenLoaded('credit_type'))
        ];
    }
}