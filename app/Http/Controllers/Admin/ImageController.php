<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;


class ImageController extends Controller
{
    /**
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     */
    public function store(){
        $task = new Task();
        $task->id=0;
        $task->exists =true;
        $image = $task->addMediaFromRequest('upload')->toMediaCollection('images');
        return response()->json([
         'url'=> $image->getUrl('thumb')
        ]);
    }
}
