<?php

namespace QQB\Card\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use QQB\ResourceDetail\Resources\ResourceDetailResource;
use QQB\Advantage\Resources\AdvantageResource;
use QQB\Documents\Resources\DocumentResource;
use QQB\Faqs\Resources\FaqsResource;

class CardResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image_file?$this->image_file->url:'',
            'cover_image' => $this->cover_image_file?$this->cover_image_file->url:'',
            'big_image' => $this->big_image_file?$this->big_image_file->url:'',
            'type' => $this->type,
            'cost' => $this->cost,
            'validity' => $this->validity,
            'required_documents' => $this->required_documents,
            'resource_details' => ResourceDetailResource::collection($this->whenLoaded('resource_details')),
            'advantages' => AdvantageResource::collection($this->whenLoaded('advantages')),
            'documents' => DocumentResource::collection($this->whenLoaded('documents')),
            'faqs' => FaqsResource::collection($this->whenLoaded('faqs')),
        ];
    }
}