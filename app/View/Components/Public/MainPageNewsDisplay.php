<?php

namespace App\View\Components\Public;

use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainPageNewsDisplay extends Component
{
    /**
     * Create a new component instance.
     */
    public $latestNews;
    public function __construct()
    {

        $this->latestNews = News::news()->last(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.main-page-news-display');
    }
}
