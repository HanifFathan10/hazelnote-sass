<?php

namespace App\View\Components\ui\modal;

use App\Models\Priority;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class edit extends Component
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
        $priorities = Priority::all();

        return view('components.ui.modal.edit', [
            'priorities' => $priorities
        ]);
    }
}
