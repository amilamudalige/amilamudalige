<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subchart extends Component
{
    public function render()
    {
        return view('livewire.subchart')->layout('layouts.base');;
    }
    public function open_create()
    {
       
        $this->emit('open_create_subcarts');
    }
}
