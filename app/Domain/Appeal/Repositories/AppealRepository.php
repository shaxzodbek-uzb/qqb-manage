<?php
namespace QQB\Appeal\Repositories;

use App\Appeal;
use QQB\Appeal\Resources\AppealResource;
use  ClassicO\NovaMediaLibrary\Core\Upload;
class AppealRepository{
    private $appeals;

    public function __construct(Appeal $appeals) {
        $this->appeals = $appeals;
    }
    public function store($request): array
    {
        $files = [];
        foreach ($request->upload_files as $file) {
            $upload = new Upload($file);

            if ( !$upload->setType() )
                abort(422, __('Forbidden file format'));

            $upload->setWH();

            $upload->setFolder(request('folder'));

            $upload->setPrivate();

            $upload->setFile();

            if ( !$upload->checkSize() )
                abort(422, __('File size limit exceeded') . $file_name);

            $item = $upload->save();
            if($item){
                $files[] = $item->id;
            }
        }
        $params = [
            'title' => $request->title,
            'address' => $request->address,
            'content' => $request->content,
            'type' => $this->appeals::TYPE_ANONYMOUS,
            'status' => $this->appeals::STATUS_NEW,
            'files' => $files
        ];
        return ['appeal' => new AppealResource($this->appeals->create($params))];
    }
}