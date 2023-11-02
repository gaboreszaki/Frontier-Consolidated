<?php
    
    namespace App\Services;
    
    use Illuminate\Support\Facades\Storage;
    use Intervention\Image\Facades\Image;
    
    class FileHandlingService
    {
        
        public function storeOriginal($file)
        {
            if (!$file) {
                return null;
            }
            
            $name = $file->hashName();
            //store Original:
            Storage::put("public/original", $file);
            return  $name;
        }
        public function processImageByType($type, $fileName)
        {

            

            
            /////////
            /// Process files with mode selected:
            switch ($type) {
                case 'thumbnail':
                    
                    $width = 300;
                    $height = null;
                    $quality = 80;
                    $folderName = "thumbnails";
                    $this->processFile($fileName, $folderName, $width, $height, $quality);
                    
                    return $fileName;
                    
                    
                case 'card':
                    $width = null;
                    $height = 300;
                    $quality = 80;
                    $folderName = "card";
                    $this->processFile($fileName, $folderName, $width, $height, $quality);
                    
                    return $fileName;
            }
            
return null;
        }
        
        private function processFile(
            $fileName,
            $saveFolder,
            ?int $width ,
            ?int $height,
            $quality
        ) {
            $img = Image::make('storage/original/'.$fileName);
            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
            
            $img->save(public_path("storage/$saveFolder/$fileName"), $quality);
        }
        
    }