<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LoadingText extends Component
{
    public string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): View|Closure|string
    {
        return view('components.layout.loading-text');
    }
}
