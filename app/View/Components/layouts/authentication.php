<?php

namespace App\View\Components\layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class authentication extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $link, public string $header)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.authentication');
    }
}
