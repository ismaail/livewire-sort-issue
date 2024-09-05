<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskComponent extends Component
{
    public Task $task;

    public function render()
    {
        return view('livewire.task-component');
    }
}
