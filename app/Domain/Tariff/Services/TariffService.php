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
        $tariffs = [];
        if(request()->get('slug'))
            $tariffs = $this->tariffRepo->tariffsByType(request()->get('slug'));
        else
            $tariffs = $this->tariffRepo->allTariffs();
        return $tariffs;
    }
    public function allRootTariffsWithChildren(): array
    {
        $tariffs = [];
        if(request()->get('slug'))
            $tariffs = $this->tariffRepo->allRootTariffsWithChildren(request()->get('slug'));
        else
            $tariffs = $this->tariffRepo->allRootTariffsWithChildren();
        return $tariffs;
    }
    public function tariffTypes(): array
    {
        $tariff_types = $this->tariffTypeRepo->allTariffTypes();
        return $tariff_types;
    }
    public function getTypeBySlug($slug): array
    {
        return $this->tariffTypeRepo->getBySlug($slug);
    }
    public function getDataForPage(): array
    {
        return $this->tariffTypes();
    }
}
