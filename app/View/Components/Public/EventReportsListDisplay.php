<?php

namespace App\View\Components\Public;

use App\Models\AfterEventReport;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EventReportsListDisplay extends Component
{
    /**
     * Create a new component instance.
     */
    public object $reports;
    
    public function __construct()
    {
        $this->reports = AfterEventReport::last()->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.event-reports-list-display');
    }
}
