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
        $files = $this->uploadFiles($request);
        $params = [
            'title' => $request->title,
            'address' => $request->address,
            'content' => $request->content,
            'type' => $request->type,
            'status' => $this->appeals::STATUS_NEW,
            'files' => $files
        ];
        $appeal = $this->appeals->create($params);
        if($request->additional_params)
            foreach ($request->additional_params as $item) {
                $resource = $appeal->resource_details()->create([
                    'name' => $item['label'],
                    'text' => $item['value'],
                ]);
            }
        return ['appeal' => new AppealResource($appeal)];
    }

    public function uploadFiles($request): array
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
        return $files;
    }
}