<div
	x-sort:item="{{ $task->id }}"
	class="group flex items-center space-x-2 py-2 px-2 hover:bg-gray-100 select-none"
>
	{{--<svg x-sort:handle xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 hover:cursor-move">
		<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
	</svg>--}}
	<svg class="drag-handle invisible group-hover:visible hover:cursor-move size-5" aria-hidden="true" viewBox="0 0 16 16"><path d="M10 13a1 1 0 100-2 1 1 0 000 2zm-4 0a1 1 0 100-2 1 1 0 000 2zm1-5a1 1 0 11-2 0 1 1 0 012 0zm3 1a1 1 0 100-2 1 1 0 000 2zm1-5a1 1 0 11-2 0 1 1 0 012 0zM6 5a1 1 0 100-2 1 1 0 000 2z"></path></svg>
	<span class="block">#{{ $task->id }} Task</span>
</div>
