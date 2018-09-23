@extends('layouts.app')


@section('content')
	<a class="btn btn-default" onclick="history.go(-1);">Back</a>
	<h1>{{$listing->name}}</h1>
	<hr>
	<p>Address: {{$listing->address}}</p>
	<p>Website: <a href="https://{{$listing->website}}" target="_blank">{{$listing->website}}</a></p>
	<p>Email: {{$listing->email}}</p>
	<p>Phone: {{$listing->phone}}</p>
	<hr>
	<div class="well">
		{{$listing->info}}
	</div>
	<br><br>
	{!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'pull-right btn btn-xs btn-danger']) }}
    {!! Form::close() !!}</a>
    <a href="/listings/{{$listing->id}}/edit" class=" pull-right btn btn-xs btn-info">Edit</a>

@endsection