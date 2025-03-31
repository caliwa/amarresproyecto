<?php

namespace App\Livewire\Menu;

use Livewire\Component;
use Livewire\Attributes\Isolate;

#[Isolate]
class MediatorMenuComponent extends Component
{
    public function render()
    {
        return view('livewire.menu.mediator-menu-component');
    }
}
