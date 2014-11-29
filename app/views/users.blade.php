@extends('layout')

@section('title')
	<title>Usuario</title>
@stop

@section('content')
    @foreach($users as $user)
        <p>{{ $user->email }}</p>
    @endforeach
@stop