<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Singlecourse extends Component
{
    public function render()
    {
        return view('livewire.singlecourse')->layout('layouts.index');
    }
}
