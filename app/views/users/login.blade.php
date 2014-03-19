{{ Form::open(array('url'=>'users/signin', 'class'=>'form')) }}
	<h2 class="form-signin-heading">Please Login</h2>

	{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
	{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}

	{{ Form::submit('Login', array('class'=>'btn btn-primary'))}}
{{ Form::close() }}