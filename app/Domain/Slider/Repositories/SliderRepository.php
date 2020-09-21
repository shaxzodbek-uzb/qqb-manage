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
            default:
                $slider = $this->sliders->first();
        }
        return $this->transform($slider);
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