<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    public function show($id)
    {
    	$staff = Staff::find($id);

    	return $staff;
    }
}
