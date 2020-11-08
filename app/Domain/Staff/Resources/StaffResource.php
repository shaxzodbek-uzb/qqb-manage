<?php

namespace QQB\Staff\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StaffResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'staffs';

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
            'fullname' => $this->fulname,
            'position' => $this->position,
            'confirmation_document' => $this->confirmation_document,
            'phone' => $this->phone,
            'avatar' => $this->avatar_file?$this->avatar_file->url:'',
        ];
    }
}