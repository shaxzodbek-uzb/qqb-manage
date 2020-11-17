<?php
namespace QQB\CashMachine\Repositories;

use App\CashMachine;
use QQB\CashMachine\Resources\CashMachineResource;

class CashMachineRepository {
    
    private $cash_machines;

    public function __construct(CashMachine $cash_machines) {
        $this->cash_machines = $cash_machines;
    }

    public function getAll(): array
    {
        return ['cash_machines' => CashMachineResource::collection($this->cash_machines->with('branche')->get())];
    }
}