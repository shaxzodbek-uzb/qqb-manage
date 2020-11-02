<?php 

namespace QQB\Deposit\Repositories;

use Illuminate\Support\Collection;
use App\Deposit;
use QQB\Deposit\Resources\DepositResource;

class DepositRepository
{

    protected $deposits;
    public function __construct()
    {
        $this->deposits = new Deposit;
    }

    public function getAll(): array
    {
    	$deposits = $this->deposits->all();
    	return ['deposits' => DepositResource::collection($deposits)];

    }
}