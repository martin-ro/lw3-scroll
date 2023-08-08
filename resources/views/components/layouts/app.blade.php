<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>{{ config('app.name') }}</title>
</head>
<body>
	<x-navbar />
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8 py-12">
		{{ $slot }}
	</div>
</body>
</html>