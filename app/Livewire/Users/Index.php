<?php

namespace App\Livewire\Users;

use App\Models\Users\User;
use Livewire\Component;
use Livewire\Features\SupportQueryString\Url;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Url]
    public ?string $search = null;

    public function render()
    {
        return view('livewire.users.index', [
            'users' => User::where('name', 'LIKE', '%'.$this->search.'%')->
                orwhere('email', 'LIKE', '%'.$this->search.'%')->paginate(10),
        ]);
    }
}
