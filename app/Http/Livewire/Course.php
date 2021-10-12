<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Course extends Component
{
    public function render()
    {
        return view('livewire.course')->layout('layouts.frontend.course_index');
    }
}
