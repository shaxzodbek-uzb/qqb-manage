<?php 

namespace QQB\Credits\Repositories;

use App\CreditType;
use Illuminate\Support\Collection;
use QQB\Credits\Resources\CreditTypeResource;

class CreditTypeRepository
{

    private $types;

    public function __construct() {
        $this->types = new CreditType;
    }
    public function getAll(): array
    {
        return ['types' => CreditTypeResource::collection($this->types->all())];
    }
}
