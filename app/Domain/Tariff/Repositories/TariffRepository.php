<?php 

namespace QQB\Tariff\Repositories;

use App\Tariff;
use Illuminate\Support\Collection;
use QQB\Tariff\Resources\TariffResource;

class TariffRepository
{

    protected $tariffs;
    public function __construct()
    {
        $this->tariffs = new Tariff;
    }

    public function allTariffs(): array
    {
    	$tariffs = $this->tariffs->all();
    	return ['tariffs' => TariffResource::collection($tariffs)];
    }
    public function tariffsByType($slug): array
    {
        $tariffs = $this->tariffs->whereHas('type', function($q) use ($slug){
            $q->where('slug', $slug);
        })->get();
    	return ['tariffs' => DocumentResource::collection($tariffs)];
    }

    public function allRootTariffsWithChildren($slug = null)
    {
        $tariffs = $this->tariffs->where('parent_id', null)->with('tariffs.tariffs');
        if($slug)
            $tariffs->whereHas('type', function($q) use ($slug){
                $q->where('slug', $slug);
            });
        $tariffs = $tariffs->get();
    	return ['tariffs' => TariffResource::collection($tariffs)];
    }
}

