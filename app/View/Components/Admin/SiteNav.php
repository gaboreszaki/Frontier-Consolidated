<?php

namespace App\View\Components\Admin;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class SiteNav extends Component
{
    /**
     * Create a new component instance.
     */
    
    public object $user;
    
    public function __construct()
    {
     $this->user = Auth::user();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.site-nav');
    }
}
