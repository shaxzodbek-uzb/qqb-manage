<?php 

namespace QQB\FinancialPerformance\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\FinancialPerformance;

class FinancialPerRepository
{
	use ResponsibleTrait;

    protected $financialPerformance;
    public function __construct(FinancialPerformance $financialPerformance)
    {
        $this->financialPerformance = $financialPerformance;
    }

    public function financialPerformance()
    {
    	$financialPerformance = $this->financialPerformance->all();
    	return $this->transform($financialPerformance);

    }

     public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'year' => $item->year,
            'definition' => $item->definition,
        ];
    }
}
