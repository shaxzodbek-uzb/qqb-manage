<?php
namespace QQB\Branche\Repositories;

use App\Branche;
use QQB\Branche\Resources\BrancheResource;

class BrancheRepository
{
    protected $branches;
    public function __construct(Branche $branches) {
        $this->branches = $branches;
    }

    public function getAll($cash_machine): array
    {
        $branches = $this->branches->where('cash_machine', $cash_machine)->orderBy('id')->get();
        return ['branches' => BrancheResource::collection($branches)];
    }
}