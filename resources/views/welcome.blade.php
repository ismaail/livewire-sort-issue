<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Livewire / Alpinejs - Issue</title>
	<link href="{{ asset('assets/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="container py-4">
	<h1 class="text-center">Livewire / Alpinejs - Issue</h1>
	<div class="row">
		@foreach($columns as $column)
			<ul class="col-4 list-group">
				<li class="list-group-item list-group-item-dark fw-bold">{{ $column->name }}</li>
				@foreach($column->tasks as $task)
					<li class="list-group-item">#{{ $task->id }} Task</li>
				@endforeach
			</ul>
		@endforeach
	</div>
</body>
</html>
