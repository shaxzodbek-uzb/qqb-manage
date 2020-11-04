<?php
namespace QQB\Gallery\Repositories;

use App\Gallery;
use QQB\Gallery\Resources\GalleryResource;

class GalleryRepository {
    private $entity;
    
    public function __construct(Gallery $entity) {
        $this->entity = $entity;
    }

    public function getAll(): array
    {
        return ['gallery' => GalleryResource::collection($this->entity->all())];
    }
}