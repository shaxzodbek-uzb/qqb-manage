<?php 

namespace QQB\Documents\Services;


use QQB\Documents\Repositories\DocumentRepository;
use QQB\Documents\Repositories\DocumentTypeRepository;


class DocumentService
{
    private $documentRepo;
    private $documentTypeRepo;

    public function __construct()
    {
        $this->documentRepo = new DocumentRepository;
        $this->documentTypeRepo = new DocumentTypeRepository;
    }

    public function allDocuments(): array
    {
        $documents = $this->documentRepo->documents();
        return $documents;
    }
    public function documentTypes(): array
    {
        $document_types = $this->documentTypeRepo->document_types();
        return [
            'document_types' => $document_types,
        ];
    }
    public function getDataForPage(): array
    {
        return $this->documentTypes();
    }
}
