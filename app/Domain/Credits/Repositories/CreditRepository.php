<?php 

namespace QQB\Credits\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\Credit;

class CreditRepository
{
	use ResponsibleTrait;

    private $credits;

    public function __construct(Credit $credits) {
        $this->credits = $credits;
    }
    public function getAll(): array
    {
        return $this->transform($this->credits->get());
    }
    public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'description' => $item->description,
            'content' => $item->content,
            'image' =>  $item->image_file?$item->image_file->url:'',
            'slug' =>  $item->slug,
            'term' =>  $item->term,
            'grace_period' =>  $item->grace_period,
            'about' =>  $item->about,
            'resource_details' =>  $item->resource_details,
            'documents' =>  $item->documents,
            'faqs' =>  $item->faqs,
        ];
    }
}
