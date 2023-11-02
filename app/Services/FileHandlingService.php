<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FileHandlingService{
    

    function store($type, $file){
        if ($file){
            
            $name = $file->hashName();
            //store Original:
            Storage::put("public/original", $file);
            
        switch ($type){
            case 'thumbnail':

                $width = 300;
                $height = null;
                $quality = 80;
                $folderName = "thumbnails";
                
                }
            
            $this->processFile($name, $folderName, $width, $height, $quality );
            
            return $name;
        }else{
            return null;
        }
        
    }
    
    private function processFile($fileName,  $saveFolder, $width=null, $height=null, $quality){
        
        
        $img = Image::make('storage/original/'.$fileName);
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        
        $img->save(public_path("storage/$saveFolder/$fileName"),$quality );

    }

}