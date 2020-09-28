<?php 

namespace QQB\Tariff\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\Tariff;

class TariffRepository
{
	use ResponsibleTrait;

    protected $tariffs;
    public function __construct(Tariff $tariffs)
    {
        $this->tariffs = $tariffs;
    }

    public function tariffs()
    {
    	$tariffs = $this->tariffs->all();
    	return $this->transform($tariffs);

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

