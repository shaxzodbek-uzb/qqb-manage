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
        return ['appealTypes' => AppealTypeResource::collection($appealTypes)];
    }
}