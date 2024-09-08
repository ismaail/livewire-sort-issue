<div class="flex grow-0 space-x-4">
	@foreach($columns as $column)
		<div wire:key="column-{{ $column->id }}" class="flex flex-col border w-1/3 p-2 space-y-0 rounded-2xl">
			<div class="p-2 font-bold bg-gray-100 rounded-t-2xl">{{ $column->name }}</div>
			<livewire:column-component :key="$column->id" :column="$column" />
		</div>
	@endforeach
</div>
