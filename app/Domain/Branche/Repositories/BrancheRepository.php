<?php
namespace QQB\Branche\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\Branche;

class BrancheRepository
{
    use ResponsibleTrait;

    protected $branches;
    public function __construct(branche $branches)
    {
        $this->branches = $branches;
    }
    public function getAllBranches(): array
    {
        $branches = $this->branches->all();
        return $this->transform($branches);
    }

    public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'region' => $item->region,
            'director' => $item->director,
            'address' => $item->address,
            'phone' => $item->phone,
            'email' => $item->email,
            'long' => $item->long,
            'lat' => $item->lat,
        ];
    }
}