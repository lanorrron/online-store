<?php

namespace App\Http\Livewire\Colors;

use App\Models\Color;
use Livewire\Component;

class ColorList extends Component
{
    public $colors;
    public function render()
    {
        $this->colors=Color::all();
        return view('livewire.colors.color-list');
    }
}
