<?php

namespace App\Services;

use App\Models\File;

class Service
{
    public static function getFullPath($file_id) {
        $file = File::find($file_id);
        if(!$file) {
            return '';
        }
        $path = $file->path;
        $fullPath = url(str_replace('/app/public/', '/', $path));
        return $fullPath;
    }


}
