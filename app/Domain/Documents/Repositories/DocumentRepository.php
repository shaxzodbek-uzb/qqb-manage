<?php 

namespace QQB\Documents\Repositories;

use App\Document;
use App\DocumentCategory;
use Illuminate\Support\Collection;
use QQB\Documents\Resources\DocumentResource;

class DocumentRepository
{
    protected $documents;

    public function __construct()
    {
        $this->documents = new Document;
    }

    public function documents(): array
    {
        $documents = $this->documents->all();
    	return ['documents' => DocumentResource::collection($documents)];
    }
    public function documentsByType($slug):array
    {
        $documents = $this->documents->whereHas('document_type', function($q) use ($slug){
            $q->where('slug', $slug);
        })->get();
    	return ['documents' => DocumentResource::collection($documents)];
    }
}
