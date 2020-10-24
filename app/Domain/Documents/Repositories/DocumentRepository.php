<?php 

namespace QQB\Documents\Repositories;

use App\Document;
use App\DocumentCategory;
use Illuminate\Support\Collection;
use QQB\Core\Traits\ResponsibleTrait;
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
    	return ['document' => DocumentResource::collection($documents)];
    }
}
