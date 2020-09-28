<?php 

namespace QQB\Staff\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\Staff;


class StaffRepository
{
	use ResponsibleTrait;

    protected $staffs;
    public function __construct(Staff $staffs)
    {
        $this->staffs = $staffs;
    }

    public function staffs()
    {
    	$staffs = $this->staffs->all();
    	return $this->transform($staffs);

    }

    public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'fullname' => $item->fullname,
            'avatar' => $item->avatar,
            'phone' => $item->phone,
            'meta' => $item->meta,
    	    ];
    }

}