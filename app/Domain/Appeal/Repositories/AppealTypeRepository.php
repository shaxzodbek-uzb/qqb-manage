<?php
namespace QQB\Appeal\Repositories;

use App\AppealType;
use QQB\Appeal\Resources\AppealTypeResource;
use  ClassicO\NovaMediaLibrary\Core\Upload;
class AppealTypeRepository{
    private $appealTypes;
    public function __construct(AppealType $appealTypes)
    {
        $this->appealTypes = $appealTypes;
    }
    public function getAll(): array
    {
        $appealTypes = $this->appealTypes->all();
        return ['appeal_types' => AppealTypeResource::collection($appealTypes)];
    }
    public function getBySlug($slug): array
    {
        $appealType = $this->appealTypes->where('slug', $slug)->first();
        return ['appeal_type' => new AppealTypeResource($appealType)];
    }
}