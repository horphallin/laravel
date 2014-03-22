<h1>{{ Lang::get('users.dashboard') }}</h1>
<table class="table table-striped">
	<tr>
		<th>{{ Trans('users.firstname') }}</th>
		<th>{{ Trans('users.lastname') }}</th>
		<th colspan="3">{{ Trans('users.email') }}</th>
	</tr>
	@foreach ($users as $user)
		<tr>
			<td>{{ $user->firstname }}</td>
			<td>{{ $user->lastname }}</td>
			<td>{{ $user->email }}</td>
			<td><span class="glyphicon glyphicon-remove"></span></td>
			<td><span class="glyphicon glyphicon-pencil"></span></td>
		</tr>
	@endforeach
</table>

<a href="{{ url('users/register') }}" class="btn btn-default">{{ Trans('users.addUser') }}</a>