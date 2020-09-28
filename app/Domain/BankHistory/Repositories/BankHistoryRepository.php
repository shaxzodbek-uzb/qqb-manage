<?php 

namespace QQB\BankHistory\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\BankHistory;


class BankHistoryRepository 
{
	use ResponsibleTrait;

    protected $bankHistories;
    public function __construct(bankHistory $bankHistories)
    {
        $this->bankHistories = $bankHistories;
    }

    public function allHistories(): array
    {
    	 $bankHistories = $this->bankHistories->all();
        return $this->transform($bankHistories);
    }

    public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'year' => $item->year,
            'description' => $item->description,
        ];
    }
}