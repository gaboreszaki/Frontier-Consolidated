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
        protected $signature = 'images:process-temp';
        
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Processing temp images to storage.';
        
        /**
         * Execute the console command.
         */
        public function handle()
        {
            echo "build temp disk";
            $disk = Storage::build([
                'driver' => 'local',
                'root' => 'public/',
            ]);
            
            $directory = "images/temp";
            $files = $disk->files($directory, true);
            
            foreach ($files as $file) {
                $file_name = basename($file);
                
                echo "Processing:  $file_name \n ";
                
                echo " - Copy from temp folder to originals";
                Storage::disk('public')->put(
                    "originals/$file_name",
                    $disk->get("$directory/$file_name")
                );
                
                # utilising the fileHandling services and process different sized images:
                $fileService = new FHS();
                
                echo " - Generating thumbnail";
                $fileService->processImageByType('thumbnail', $file_name);
                echo " - Generating card";
                $fileService->processImageByType('card', $file_name);
                echo "\n\n";
            }
        }
        
    }
