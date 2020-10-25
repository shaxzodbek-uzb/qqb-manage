<?php

namespace QQB\Documents\Repositories;

use App\DocumentType;
use Illuminate\Support\Collection;
use QQB\Documents\Resources\DocumentTypeResource;

class DocumentTypeRepository
{

    protected $document_types;

    public function __construct()
    {
        $this->document_types = new DocumentType;
    }

    public function document_types()
    {
    	$document_types = $this->document_types->all();
    	return ['document_types' => DocumentTypeResource::collection($document_types)];
    }
    public function getBySlug($slug): array
    {
    	$document_type = $this->document_types->where('slug', $slug)->first();
    	return ['document_type' => new DocumentTypeResource($document_type)];
    }
}