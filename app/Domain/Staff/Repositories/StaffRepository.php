<?php 

namespace QQB\Staff\Repositories;

use QQB\Staff\Resources\StaffResource;
use App\Staff;


class StaffRepository
{

    protected $staffs;
    public function __construct(Staff $staffs)
    {
        $this->staffs = $staffs;
    }

    public function getAll()
    {
    	$staffs = $this->staffs->all();
    	return ['staffs' => StaffResource::collection($staffs)];
    }

}