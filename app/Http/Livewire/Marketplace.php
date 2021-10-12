<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Marketplace extends Component
{
    public function render()
    {
        return view('livewire.marketplace')->layout('layouts.index');
    }
}
