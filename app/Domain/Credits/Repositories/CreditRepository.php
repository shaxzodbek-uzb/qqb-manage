<?php 

namespace QQB\Credits\Repositories;

use App\Credit;
use Illuminate\Support\Collection;
use QQB\Credits\Resources\CreditResource;

class CreditRepository
{

    private $credits;

    public function __construct() {
        $this->credits = new Credit;
    }
    public function getAll(): array
    {
        return ['credits' => CreditResource::collection($this->credits->all())];
    }
    public function getAllByTypeSlug($slug): array
    {
        $credits = $this->credits
        ->whereHas('credit_type', function($q) use ($slug){
            $q->where('slug',$slug);
        })
        ->get();
        return ['credits' => CreditResource::collection($credits)];
    }
    public function getById($id): array
    {
        $credit = $this->credits->with('credit_type','documents','faqs')->find($id);
        return ['credit' => new CreditResource($credit)];
    }
}
