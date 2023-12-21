<?php
    
    namespace App\Http\Controllers\Admin;
    
    use App\Http\Controllers\Controller;
    use App\Http\Requests\StorecommunityRequest;
    use App\Http\Requests\UpdatecommunityRequest;
    use App\Models\Community;
    use Illuminate\View\View;
    
    use function Livewire\Volt\layout;
    
    class CommunityController extends Controller
    {
        
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
        public function store(StorecommunityRequest $request)
        {
            //
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
            UpdatecommunityRequest $request,
            community $community
        ) {
            //
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
