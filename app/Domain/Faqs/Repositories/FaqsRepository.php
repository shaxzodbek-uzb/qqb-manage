<?php 

namespace QQB\Faqs\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\Faqs;


class FaqsRepository 
{
	use ResponsibleTrait;

    protected $faqs;
    public function __construct(Faqs $faqs)
    {
        $this->faqs = $faqs;
    }

    public function faqs()
    {
    	$faqs = $this->faqs->all();
    	return $this->transform($faqs);

    }

     public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'question' => $item->question,
            'answer' => $item->answer,
        ];
    }

}