<?php 

namespace QQB\Tariff\Repositories;

use App\TariffType;
use Illuminate\Support\Collection;
use QQB\Core\Traits\ResponsibleTrait;
use QQB\Tariff\Resources\TariffTypeResource;

class TariffTypeRepository
{
	use ResponsibleTrait;

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
}

