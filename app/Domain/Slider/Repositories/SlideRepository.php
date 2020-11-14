<?php
namespace QQB\Slider\Repositories;

use App\Slide;
use QQB\Core\Traits\ResponsibleTrait;

class SlideRepository
{
    use ResponsibleTrait;
    private $slides;
    public function __construct(Slide $slides)
    {
        $this->slides = $slides;
    }

    public function map(object $slide): array
    {
        return [
            'id' => $slide->id,
            'name' => $slide->name,
            'url' => $slide->url,
            'description' => $slide->description,
            'image' => $slide->image_file?$slide->image_file->url:'',
        ];
    }

}