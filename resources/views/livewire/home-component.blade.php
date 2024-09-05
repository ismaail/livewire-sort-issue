<div class="flex space-x-4">
	@foreach($columns as $column)
		<div
			x-sort="console.log('handle sort!!')"
			x-sort:group="columnstasks"
			{{--wire:key="{{ $column->id }}"--}}
			class="border w-1/3 p-2 space-y-0 rounded-2xl">
			<div class="p-2 font-bold bg-gray-100 rounded-t-2xl">{{ $column->name }}</div>
			@foreach($column->tasks as $task)
				<div
					{{--wire:key="{{ $task->id }}"--}}
					x-sort:item="{{ $task->id }}"
					class="flex items-center space-x-2 py-2 px-2 hover:bg-gray-100 select-none"
				>
					<svg x-sort:handle xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 hover:cursor-move">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
					</svg>
					<span class="block">#{{ $task->id }} Task</span>
				</div>
			@endforeach
		</div>
	@endforeach
</div>

