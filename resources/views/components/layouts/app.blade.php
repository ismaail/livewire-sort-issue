<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Livewire / Alpinejs - Issue</title>
	@livewireStyles
	@vite('resources/css/app.css')
</head>
<body class="p-4 max-2xl">
	<h1 class="mb-10 text-center font-semibold text-xl">Livewire / Alpinejs - Issue</h1>
	{{ $slot }}
	@livewireScripts
	@vite('resources/js/app.js')
</body>
</html>
