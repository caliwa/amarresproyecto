<?php

namespace App\Livewire\Menu;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class IndexMenuComponent extends Component
{
    public function mount(){
        $timezone = request()->cookie('timezone', 'UTC');
        session(['timezone' => $timezone]);
    }

    public function render()
    {
        return view('livewire.menu.index-menu-component');
    }
}
