<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    public $categories;
    public function render()
    {
       $this->categories=Category::all();

        return view('livewire.category.category-list');
    }
}
