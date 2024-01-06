<?php
    
    namespace App\Http\Controllers\Admin;
    
    use App\Http\Controllers\Controller;
    use App\Http\Requests\StoreCommunityRequest;
    use App\Http\Requests\UpdateCommunityRequest;
    use App\Models\Community;
    use App\Services\FileHandlingService;
    use Illuminate\View\View;
    
    use function Livewire\Volt\layout;
    
    class CommunityController extends Controller
    {
        
        public function __construct(
            public FileHandlingService $fileHandlingService
        ) {
        }
        
        /**
         * Display a listing of the resource.
         */
        public function index(): View
        {
            return view('admin.community.index', [
                    'entries' => Community::orderBy('priority')->get()
                ]
            );
        }
        
        /**
         * Show the form for creating a new resource.
         */
        public function create(): View
        {
            return view('admin.community.create', [
                'layouts' => config('static_layouts.layouts')
            ]);
        }
        
        /**
         * Store a newly created resource in storage.
         */
        public function store(StoreCommunityRequest $request)
        {
            $valid = $request->validated();
            
            /// If We have an image lets store it
            $fileName = $this->fileHandlingService->storeOriginal(
                $request->file('background_image')
            );
            $this->fileHandlingService->processImageByType(
                'thumbnail',
                $fileName
            );
            $this->fileHandlingService->processImageByType('card', $fileName);
            
            $valid['background_image'] = $fileName;
            Community::create($valid);
            
            return redirect('/admin/community');
        }
        
        /**
         * Display the specified resource.
         */
        public function show(Community $community): View
        {
            return view('admin.community.show', [
                'community' => $community
            ]);
        }
        
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Community $community): View
        {
            return view('admin.community.edit', [
                'community' => $community,
                'layouts' => config('static_layouts.layouts')
            ]);
        }
        
        /**
         * Update the specified resource in storage.
         */
        public function update(
            UpdateCommunityRequest $request,
            Community $community
        ) {
            $valid = $request->validated();
            
            $community->updateOrCreate(
                [
                    'id' => $community->id
                ], [
                    'layout' => $valid["layout"],
                    'title' => $valid["title"],
                    'content' => $valid["content"],
                    'is_pinned' => isset($valid["is_pinned"])? $valid['is_pinned']: 0,
                    'priority' => $valid["priority"]
                ]
            );
            
            
            return to_route('admin.community.index')
                ->withStatus('Community entry updated successfully.');
        }
        
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            Community::destroy($id);
            
            return to_route('admin.community.index')
                ->withStatus('community entry was deleted successfully.');
        }
        
    }
