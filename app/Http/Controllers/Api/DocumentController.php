<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Document;

class DocumentController extends Controller
{
   public function documents()
    {
    	$documents = Document::all();

    	return ['documents' => $documents];
    }

    public function show($id)
    {
    	$document = Document::find($id);

    	return $document;
    }
}
