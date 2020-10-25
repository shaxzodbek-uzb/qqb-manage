<?php 

namespace QQB\Tariff\Repositories;

use App\TariffType;
use Illuminate\Support\Collection;
use QQB\Tariff\Resources\TariffTypeResource;

class TariffTypeRepository
{

    protected $tariffs;
    public function __construct()
    {
        $this->tariffTypes = new TariffType;
    }

    public function allTariffTypes()
    {
    	$tariffTypes = $this->tariffTypes->all();
    	return ['tariff_types' => TariffTypeResource::collection($tariffTypes)];
    }
    public function getBySlug($slug): array
    {
    	$tariffTypes = $this->tariffTypes->where('slug', $slug)->first();
    	return ['tariff_type' => new TariffTypeResource($tariffTypes)];
    }
}

