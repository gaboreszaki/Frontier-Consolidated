<?php

namespace App\View\Components\Public;

use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LastAnnouncementDisplay extends Component
{
    /**
     * Create a new component instance.
     */
    public $lastAnnouncement;
    public function __construct()
    {
        $news = new News();
        $this->lastAnnouncement = $news->lastAnnouncement()->first();
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.last-announcement-display');
    }
}
