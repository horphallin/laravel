<h1>Dashboard</h1>

<p>Welcome to your Dashboard. You rock!</p>
<table class="table">
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

<a href="{{ url('users/register') }}" class="btn btn-default">Add User</a>