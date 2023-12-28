<?php

namespace App\View\Components\Public;

use App\Models\Community;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CommunityDisplay extends Component
{
    
    
    public object $community;
    
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->community = Community::default()->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.community-display');
    }
}
