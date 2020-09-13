<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
     public function pages()
    {
    	$pages = Page::all();
    	
    	return ['pages' => $pages];
    }
}
