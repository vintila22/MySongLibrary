@extends('master')

@section('content')
	<a href="/songs/{{$song->slug}}/edit">
		{{$song->title}}
	</a>
@stop

@section('footer')
    Cristian Vintila
@stop