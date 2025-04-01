<?php

namespace App\Livewire\Menu;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class IndexMenuComponent extends Component
{
    public function mount(){
        dd(Storage::disk('private'));
    }

    public function render()
    {
        return view('livewire.menu.index-menu-component');
    }
}
