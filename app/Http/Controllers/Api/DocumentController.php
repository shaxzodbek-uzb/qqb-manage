<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\Documents\Services\DocumentService;

class DocumentController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new DocumentService;
    }

    public function index()
    {
    	$documents = $this->service->allDocuments();
    	return response()->json([
            'success' => true,
            'data' => $documents
        ]);
    }

    public function show($id)
    {
    	$document = Document::find($id);

    	return $document;
    }
}
