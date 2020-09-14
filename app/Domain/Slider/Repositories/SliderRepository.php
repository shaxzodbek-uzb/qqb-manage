<?php
namespace QQB\Slider\Repositories;

use App\Slider;

class SliderRepository
{
    public function getAll(string $type = null): Slider
    {
        switch ($type) {
            case 'main':
                return Slider::where('slug', 'home-slider')->with('slides')->first();
            default:
                return Slider::first();
        }
    }

}