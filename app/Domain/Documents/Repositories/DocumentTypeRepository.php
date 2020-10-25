<?php

namespace QQB\Documents\Repositories;

use App\DocumentType;
use Illuminate\Support\Collection;
use QQB\Core\Traits\ResponsibleTrait;
use QQB\Documents\Resources\DocumentTypeResource;

class DocumentTypeRepository
{
	use ResponsibleTrait;

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
    public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'document_type' => $item->document_type,
            'release_date' => $item->release_date
        ];
    }
}