<?php

namespace App\View\Components\Layouts\Frontend_User;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class web_user extends Component
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
        return view('components.layouts.frontend_-user.web_user');
    }
}
