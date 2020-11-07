<?php 

namespace QQB\BankHistory\Repositories;

use QQB\BankHistory\Resources\BankHistoryResource;
use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\BankHistory;


class BankHistoryRepository 
{
	
    protected $bankHistories;
    public function __construct(BankHistory $bankHistories)
    {
        $this->bankHistories = $bankHistories;
    }

    public function allHistories(): array
    {
    	 $bankHistories = $this->bankHistories->orderBy('year')->get();
        return ['bank-histories' => BankHistoryResource::collection($bankHistories)];
    }

}