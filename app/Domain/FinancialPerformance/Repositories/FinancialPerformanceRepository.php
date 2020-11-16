<?php 

namespace QQB\FinancialPerformance\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\FinancialPerformance;
use QQB\FinancialPerformance\Resources\FinancialPerformanceResource;

class FinancialPerformanceRepository
{
	use ResponsibleTrait;

    protected $financialPerformances;
    public function __construct(FinancialPerformance $financialPerformances)
    {
        $this->financialPerformances = $financialPerformances;
    }

    public function getAllWithAttributes():array
    {
        return [
            'financial_performances' => FinancialPerformanceResource::collection($this->financialPerformances->with('performanceAttributes')->orderByDesc('year')->get()),
        ];
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
