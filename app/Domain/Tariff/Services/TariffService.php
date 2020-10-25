<?php 

namespace QQB\Tariff\Services;


use QQB\Tariff\Repositories\TariffRepository;
use QQB\Tariff\Repositories\TariffTypeRepository;


class TariffService
{
    private $tariffRepo;
    private $tariffTypeRepo;

    public function __construct()
    {
        $this->tariffRepo = new TariffRepository;
        $this->tariffTypeRepo = new TariffTypeRepository;
    }

    public function allTariffs(): array
    {
        $tariffs = $this->tariffRepo->allTariffs();
        return $tariffs;
    }
    public function allRootTariffsWithChildren(): array
    {
        $tariffs = $this->tariffRepo->allRootTariffsWithChildren();
        return $tariffs;
    }
    public function tariffTypes(): array
    {
        $tariff_types = $this->tariffTypeRepo->allTariffTypes();
        return [
            'tariff_types' => $tariff_types,
        ];
    }
    public function getDataForPage(): array
    {
        return $this->tariffTypes();
    }
}
