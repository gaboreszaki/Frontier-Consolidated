<?php
    
    namespace App\Livewire;
    
    use App\Models\Guide;
    use Livewire\Component;
    use Livewire\WithPagination;
    
    class GuidesIndex extends Component
    {
        
        use WithPagination;
        
        public $searchTerm = "";
        public $shownPagesNum = 30;
        public $sortBy = 'title';
        public $sortDirection = 'asc';
        
        public function render()
        {
            $guides = Guide::with(
                ['tags', 'gameVersions', 'category', 'attachments']
            );
            
            if ($this->searchTerm != "" ) {
                $guides->where('title', 'like', $this->searchTerm.'%');
            }
            
            $guides->orderBy($this->sortBy, $this->sortDirection)->paginate(
                $this->shownPagesNum
            );
            
            return view('livewire.guides-index', ['guides' => $guides->get()]);
        }
        
    }
