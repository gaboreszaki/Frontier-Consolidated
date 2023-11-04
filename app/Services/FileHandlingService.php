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
            Storage::put("public/originals", $file);
            return  $name;
        }
        public function processImageByType($type, $fileName)
        {
            
            if (!$fileName) {
                return null;
            }

            
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
                case 'fullWidth':
                    
                    $width = 800;
                    $height = null;
                    $quality = 80;
                    $folderName = "fullWidths";
                    $this->processFile($fileName, $folderName, $width, $height, $quality);
                    
                    return $fileName;
                    
                case 'card':
                    $width = null;
                    $height = 300;
                    $quality = 80;
                    $folderName = "cards";
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
            
//            dump("processing file: $fileName");
//            dump("folder: $saveFolder");
            
//            $file = Storage::disk('public')->get("original/$fileName");
            
            
            $img = Image::make(Storage::disk('public')->get("originals/".$fileName));
            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
            
            $img->save(public_path("storage/$saveFolder/$fileName"), $quality);
        }
        
        public function removeFile($fileName)
        {
            
            if (!$fileName){
                return null;
            }
            
            $this->removeFileFromDirectory($fileName,'originals');
            $this->removeFileFromDirectory($fileName,'thumbnails');
            $this->removeFileFromDirectory($fileName,'cards');
            
            
        }
        private function removeFileFromDirectory($fileName, $folder){
            
            try {
                // Validate the value...
//                dump('Removing files stating with file: $filename');
                $url = "$folder/$fileName";
//                dump($url);
                if (Storage::disk('public')->get($url)){
//                    dump('hit');
                    Storage::disk('public')->delete($url);
                }
               
                return true;
                
            } catch (Throwable $e) {
                report($e);
                
                return false;
            }
            
            
    }
        
    }