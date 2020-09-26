<?php 

namespace QQB\Poll\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\Poll;

class PollRepository
{
	use ResponsibleTrait;

    protected $polls;
    public function __construct(Poll $polls)
    {
        $this->polls = $polls;
    }

    public function polls()
    {
    	$polls = $this->polls->all();
    	return $this->transform($polls);

    }

     public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'count' => $item->count,
            'poll_variants' => $item->poll_variants,
        ];
    }

}
