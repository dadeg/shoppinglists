@extends('layout')

@section('content')

<div class="page-header">
        <h1>Login</h1>
    </div>

{{ Form::open(array('action' => 'UsersController@handleLogin')) }}
<p>
{{ $errors->first(null, '<span class="error">:message</span>') }}

{{ Form::label('username', 'Username') }}
{{ Form::text('username') }}
</p><p>
{{ Form::label('password', 'Password') }}
{{ Form::password('password') }}

</p><p>

{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}

<a href="{{ action('UsersController@create') }}" class="btn btn-default">Create a New User</a>

{{ Form::close() }}
   
    
@stop
