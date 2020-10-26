<?php

namespace QQB\Documents\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class DocumentResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'documents';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $file_info = $this->fileInfo($this->document);
        
        return [
            'id' => $this->id,
            'name' => $this->name,
            'file' => Storage::disk('public')->url($this->document),
            'mime' => $file_info['mime'],
            'extension' => $file_info['extension'],
            'size' => $file_info['size'],
        ];
    }
    public function fileInfo($main_file)
    {
        $filePath = pathinfo(Storage::path($main_file));
        $file = [
            'mime' => '',
            'name' => '',
            'size' => 0,
            'extension' => ''
        ];
        try {
            $file['mime'] = Storage::disk('public')->getMimeType($main_file);
            $file['name'] = $filePath['filename'];
            $file['extension'] = $filePath['extension'];
            $file['size'] = Storage::disk('public')->size($main_file);
        } catch(\Exception $e) {
        }

        return $file;
    }
}