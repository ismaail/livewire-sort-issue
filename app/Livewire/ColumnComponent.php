<?php

namespace App\Livewire;

use App\Models\Column;
use App\Models\Task;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ColumnComponent extends Component
{
    public Column $column;

    public function sort(int $item, int $position): void
    {
        $task = Task::findOrFail($item);

        if ($task->column_id !== $this->column->id) {
            $task->update(['column_id' => $this->column->id]);
        }

        $newOrders = $this->getNewOrders($item, $position);

        DB::transaction(function () use ($newOrders) {
            $newOrders->each(function ($taskId, $newPosition) {
                Task::where('id', $taskId)->update(['position' => $newPosition]);
            });
        });
    }

    public function render()
    {
        return view('livewire.column-component');
    }

    private function getNewOrders(int $item, int $position): Collection
    {
        $tasks = Task::where('column_id', $this->column->id)->orderBy('position')->pluck('id');

        $collection = $tasks->splice($position);
        $index = $collection->search(fn($v) => $v === $item);
        $collection->forget($index);
        $collection->unshift($item);

        return $tasks->merge($collection);
    }
}
