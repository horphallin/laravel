<!DOCTYPE html>
<html lang="en">
	<head>
		@include('include.head')
	</head>

	<body>
		<header>
			@include('include.header')
		</header>

		<div class="container">
			@if(Session::has('message'))
				<p class="alert">{{ Session::get('message') }}</p>
			@endif
			{{ $content }}

			@yield('content')
		</div>
	</body>
</html>