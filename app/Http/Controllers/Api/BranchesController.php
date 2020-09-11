<?php

namespace App\Http\Controllers\Api;

use EllipseSynergie\ApiResponse\Laravel\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Branches;

class BranchesController extends ApiController
{
	  /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function branches()
    {
    	$branches = Branches::all();

    	return $branches;
    }
}
