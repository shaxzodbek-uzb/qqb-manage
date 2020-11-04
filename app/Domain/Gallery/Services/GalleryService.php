<?php
namespace QQB\Gallery\Services;

use QQB\Gallery\Repositories\GalleryRepository;
use App\Gallery;

class GalleryService {
    
    private $repo;

    public function __construct(GalleryRepository $galleryRepo) {
        $this->repo = $galleryRepo;
    }
    public function getAll():array
    {
        return $this->repo->getAll();
    }
}