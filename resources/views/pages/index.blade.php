@extends('master')

@section('content')
	@foreach ($songs as $value)
		<a href="songs/{{$value->slug}}">
			{{$value->title}}/{{$value->artist}}</br>
		</a>
	@endforeach
@stop

@section('footer')
	Cristian Vintila
@stop