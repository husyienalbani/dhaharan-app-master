<?php

namespace App\View\Components\Layouts\Frontend_Admins;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class web-admin extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.frontend_-admins.web-admin');
    }
}
