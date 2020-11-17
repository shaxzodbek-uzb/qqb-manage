<?php 

namespace QQB\Deposit\Repositories;

use Illuminate\Support\Collection;
use App\DepositType;
use QQB\Deposit\Resources\DepositTypeResource;

class DepositTypeRepository
{

    protected $types;
    public function __construct()
    {
        $this->types = new DepositType;
    }

    public function allTypes()
    {
    	$types = $this->types->all();
    	return ['types' => DepositTypeResource::collection($types)];
    }
    
    public function getBySlug($slug): array
    {
        $type = $this->types->where('slug', $slug)->with('deposits')->first();
        return ['deposit_type' => new DepositTypeResource($type)];
    }
}