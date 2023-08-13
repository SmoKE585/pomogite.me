<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public ?string $title;
    public string $name;
    public ?string $placeholder;
    public string $type;
    public ?string $popoverId;

    public function __construct($title = null, $name, $placeholder = null, $popoverId = null, $type = 'input')
    {
        $this->title = $title;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->popoverId = $popoverId;
    }

    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
