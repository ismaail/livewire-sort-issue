<?php

namespace App\Livewire;

use App\Models\Column;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home-component')->with('columns', Column::with('tasks')->get());
    }
}
