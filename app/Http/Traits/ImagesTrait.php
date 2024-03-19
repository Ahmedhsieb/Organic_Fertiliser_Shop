<?php

namespace App\Http\Traits;

trait ImagesTrait{

    private function uploadImage($file, $fileName, $path, $oldFile = null)
    {
        $file->move(public_path('Images/admin/' . $path), $fileName);
        if(!is_null($oldFile))
        {
            unlink(public_path($oldFile));
        }
        return true;
    }
}
