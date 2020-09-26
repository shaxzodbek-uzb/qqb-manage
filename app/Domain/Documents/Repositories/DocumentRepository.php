<?php 

namespace QQB\Documents\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\Document;


class DocumentRepository
{
	use ResponsibleTrait;

    protected $documents;
    public function __construct(Document $documents)
    {
        $this->documents = $documents;
    }

    public function documents()
    {
    	$documents = $this->documents->all();
    	return $this->transform($documents);

    }

     public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'document' => $item->document_file?$item->document_file->url:'',
            'active' => $item->active,
            'document_type' => $item->document_type,
            'release_date' => $item->release_date
        ];
    }
}
