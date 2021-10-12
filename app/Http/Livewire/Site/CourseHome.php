<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class CourseHome extends Component
{
    public function render()
    {
        return view('livewire.site.course-home')->layout("layouts.index");
    }
}
