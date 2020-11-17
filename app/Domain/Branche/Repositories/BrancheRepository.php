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

    public function getAll(): array
    {
        $branches = $this->branches->orderBy('id')->get();
        return ['branches' => BrancheResource::collection($branches)];
    }
}