<?php
    
    namespace App\Console\Commands;
    
    use Illuminate\Console\Command;
    use Illuminate\Support\Facades\Storage;
    use App\Services\FileHandlingService as FHS;
    
    class ProcessTempImages extends Command
    {
        
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'app:process-temp-images';
        
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Command description';
        
        /**
         * Execute the console command.
         */
        public function handle()
        {
            echo "build temp disk";
            $disk = Storage::build([
                'driver' => 'local',
                'root' => '/',
            ]);
            
            $directory = "public/images/temp";
            $files = $disk->files($directory);
            
            dump($files);
            
            foreach ($files as $file) {
                
                
                $file_name = basename($file);
                dump($file_name);
                
                Storage::disk('public')->put("originals/$file_name", $disk->get("$directory/$file_name"));
                
                
                
//
                $fileService = new FHS();
                
                $fileService->processImageByType('thumbnail', $file_name);
                $fileService->processImageByType('card', $file_name);
//
//
//                $fileName = $fileService->storeOriginal($file);
//
//                Storage::disk('FTP')->put('new/file1.jpg', Storage::get('old/file1.jpg'));
                
            }
            
            # iteration:
//        $fileName = $this->fileHandlingService->storeOriginal($request->file('op_cover_img'));
//        $this->fileHandlingService->processImageByType('thumbnail', $fileName);
//        $this->fileHandlingService->processImageByType('card', $fileName);
        
        }
        
    }
