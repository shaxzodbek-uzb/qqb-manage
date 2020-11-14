<?php
namespace QQB\Slider\Repositories;

use App\Slider;
use QQB\Core\Traits\ResponsibleTrait;

class SliderRepository
{
    use ResponsibleTrait;

    private $sliders;
    private $slideRepo;

    public function __construct(Slider $sliders, SlideRepository $slideRepo)
    {
        $this->slideRepo = $slideRepo;
        $this->sliders = $sliders;
    }

    public function getByType(string $type = null): array
    {
        $slider = null;
        switch ($type) {
            case 'main':
                $slider = $this->sliders->where('slug', 'home-slider')->first();
                break;
            case 'popular-products':
                $slider = $this->sliders->where('slug', 'popular-products')->first();
                break;
            default:
                $slider = $this->sliders->first();
        }
        if($slider)
            return $this->transform($slider);
        else
            return [];
    }

    public function map(Slider $slider): array
    {
        return [
            'id' => $slider->id,
            'name' => $slider->name,
            'slug' => $slider->slug,
            'slides' => $this->slideRepo->transform($slider->slides),
        ];
    }

}