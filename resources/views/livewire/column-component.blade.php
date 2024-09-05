<div
	x-sort="$wire.sort($item, $position)"
	x-sort:group="columnstasks"
	class="h-full border border-red200">
	@foreach($column->tasks as $task)
		<livewire:task-component :key="$task->id" :task="$task" />
	@endforeach
</div>
