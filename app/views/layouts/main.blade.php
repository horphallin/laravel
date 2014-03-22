<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
		{{ HTML::style('packages/bootstrap/css/main.css')}}
		<title>Authentication App With Laravel 4</title>
	</head>

	<body>
		<div class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						@if(!Auth::check())
							<li><a href="/users/register">{{ Trans('general.register') }}</a>
							<li><a href="/users/login">{{ Trans('general.login') }}</a>
						@else
							<li><a href="/users/logout">{{ Trans('general.logout') }}</a>
						@endif
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			@if(Session::has('message'))
				<p class="alert">{{ Session::get('message') }}</p>
			@endif
			{{ $content }}
		</div>
	</body>
</html>