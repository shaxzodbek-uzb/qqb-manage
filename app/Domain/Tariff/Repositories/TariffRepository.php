<?php 

namespace QQB\Tariff\Repositories;

use App\Tariff;
use Illuminate\Support\Collection;
use QQB\Core\Traits\ResponsibleTrait;
use QQB\Tariff\Resources\TariffResource;

class TariffRepository
{
	use ResponsibleTrait;

    protected $tariffs;
    public function __construct()
    {
        $this->tariffs = new Tariff;
    }

    public function allTariffs()
    {
    	$tariffs = $this->tariffs->all();
    	return ['tariffs' => TariffResource::collection($tariffs)];
    }

    public function allRootTariffsWithChildren()
    {
    	$tariffs = $this->tariffs->where('parent_id', null)->with('tariffs.tariffs')->get();
    	return ['tariffs' => TariffResource::collection($tariffs)];
    }

     public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'tariff_attributes' => $item->tariff_attributes
        ];
    }
}

