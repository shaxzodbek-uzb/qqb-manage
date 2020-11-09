<?php 

namespace QQB\Poll\Repositories;

use Illuminate\Support\Collection;
use App\Poll;
use App\PollVariant;
use QQB\Poll\Resources\PollResource;

class PollRepository
{

    protected $polls;
    protected $poll_variants;
    public function __construct(Poll $polls, PollVariant $poll_variants)
    {
        $this->polls = $polls;
        $this->poll_variants = $poll_variants;
    }

    public function getAll()
    {
    	$polls = $this->polls->with('poll_variants')->get();
    	return ['polls' => PollResource::collection($polls)];
    }
    public function getById($id)
    {
    	$polls = $this->polls->with('poll_variants')->where('id', $id)->first();
    	return ['poll' => new PollResource($polls)];
    }
    public function getChildById($id)
    {
        $poll_variant = $this->poll_variants->find($id);
        return $poll_variant;
    }
}
