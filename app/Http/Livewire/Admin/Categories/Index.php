<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
// use Livewire\WithPagination;

class Index extends Component
{
   // use WithPagination;
    public function render()
    {
        // $categories = Category::paginate(5);
        return view('livewire.admin.categories.index')->layout('layouts.index');
    }
}
