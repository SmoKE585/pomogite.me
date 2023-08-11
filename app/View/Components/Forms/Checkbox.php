<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public ?string $title;
    public string $name;
    public ?string $description;

    public function __construct($title = null, $name, $description = null)
    {
        $this->title = $title;
        $this->name = $name;
        $this->description = $description;
    }

    public function render(): View|Closure|string
    {
        return view('components.forms.checkbox');
    }
}
