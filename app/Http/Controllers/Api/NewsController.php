<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function show($id)
    {
    	$news = News::find($id);
    	
    	return ['news' => $news];
    }
}
