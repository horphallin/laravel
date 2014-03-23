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